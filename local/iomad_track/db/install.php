<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * @package   local_iomad_signup
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This script is run after the dashboard has been installed.

// In case we ever want to switch back to ordinary certificates
define('CERTIFICATE', 'iomadcertificate');

require_once($CFG->dirroot . '/mod/' . CERTIFICATE . '/lib.php');
require_once($CFG->dirroot . '/mod/' . CERTIFICATE . '/locallib.php');

function xmldb_local_iomad_track_install() {

    return true;
}

/**
 * Get certificate modules
 * @param int courseid
 * @return array of certificate modules
 */
function xmldb_local_iomad_track_get_certificatemods($courseid) {
    global $DB;

    $mods = $DB->get_records(CERTIFICATE, array('course' => $courseid));

    return $mods;
}

/**
 * Create a new certificate using certificate module template
 * @param object $certificate certificate instance
 * @param object $user completing user
 * @param object $cm course module (in completing course)
 * @param object $course completing course
 * @param object $certissue certificate issue instance
 * @return string pdf content
 */
function xmldb_local_iomad_track_create_certificate($certificate, $user, $cm, $course, $certissue) {
    global $CFG;

    // load pdf library
    require_once("$CFG->libdir/pdflib.php");

    // some name changes (as used in cert template)
    $certuser = $user;
    $certificate_name = CERTIFICATE;
    $$certificate_name = $certificate;
    $certrecord = $certissue;
    $iomadcertificate = $certificate;

    // Load certificate template (magically creates $pdf variable. Grrrrrr)
    // Assumes a whole bunch of stuff exists without being explicitly required (double grrrrr)
    $typefield = CERTIFICATE . 'type';
    require("$CFG->dirroot/mod/" . CERTIFICATE . "/type/{$certificate->$typefield}/certificate.php");

    // Create the certificate content. 'S' means return as string
    return $pdf->Output('', 'S');
}

/**
 * Store the certificate in file area for local_iomad_track
 * Note: if there is more than one ceritificate in the same course, we rely on them having
 * different names (which they should).
 * @param int $contextid Context (id) of completed course
 * @param string $filename Filename of original certificate issue
 * @param int $trackid id of completion in local_iomad_track table
 * @param string $content the pdf data
 */
function xmldb_local_iomad_track_store_certificate($contextid, $filename, $trackid, $certificate, $content) {

    $fs = get_file_storage();

    // Prepare file record object
    $component = 'local_iomad_track';
    $filearea = 'issue';
    $filepath = '/';

    $fileinfo = array(
        'contextid' => $contextid,
        'component' => $component,
        'filearea' => $filearea,
        'itemid' => $trackid,
        'filepath' => $filepath,
        'filename' => $filename,
    );
    $fs->create_file_from_string($fileinfo, $content);
}

/**
 * Record certificate in db table
 * @param int $trackid id in local_iomad_track table
 * @param string $filename of certificate
 */
function xmldb_local_iomad_track_save_certificate($trackid, $filename) {
    global $DB;

    $trackcert = new stdClass();
    $trackcert->trackid = $trackid;
    $trackcert->filename = $filename;
    $DB->insert_record('local_iomad_track_certs', $trackcert);
}

/**
 * Process (any) certificates in the course
 */
function xmldb_local_iomad_track_record_certificates($courseid, $userid, $trackid, $showresult = true, $onlyvisible = true) {
    global $DB;

    // Get course.
    $course = $DB->get_record('course', array('id' => $courseid), '*', MUST_EXIST);

    // Get context
    $context = context_course::instance($courseid);

    // Get user
    $user = $DB->get_record('user', array('id' => $userid), '*', MUST_EXIST);

    // Get the certificate activities in given course
    if (!$certificates = xmldb_local_iomad_track_get_certificatemods($courseid)) {
        return false;
    }

    // Get the track info if there is one.
    if ($trackinfo = $DB->get_record_sql("SELECT * FROM {local_iomad_track}
                                          WHERE id = :id
                                          AND timecompleted > 0",
                                          array('id' => $trackid))) {

        // Iterate over to find certs for given user
        foreach ($certificates as $certificate) {

            // $cm contains checks for conditional activities et al
            $cm = get_coursemodule_from_instance(CERTIFICATE, $certificate->id, $courseid);
            $modinfo = new course_modinfo($course, $userid);
            $cm = $modinfo->get_cm($cm->id);

            // Can the user see this certificate?
            if ($onlyvisible && !$cm->uservisible) {
                continue;
            }

            // Find certificate issue record or create it (in cert lib.php)
            $certissue_function = CERTIFICATE . '_get_issue';
            $certissue = $certissue_function($course, $user, $certificate, $cm);
            // Fix the issue date.
            if (!empty($trackinfo->timecompleted)) {
                $certissue->timecreated = $trackinfo->timecompleted;
            }

            // Add the trackid.
            $certissue->trackid = $trackid;

            // Generate correct filename (same as certificate mod's view.php does)
            $certname = rtrim($certificate->name, '.');
            $filename = clean_filename(format_string("$certname.pdf"));

            $certificate->finalscore = $trackinfo->finalscore;

            // Create the certificate content (always create new so it's up to date)
            $content = xmldb_local_iomad_track_create_certificate($certificate, $user, $cm, $course, $certissue);

            // Store certificate
            xmldb_local_iomad_track_store_certificate($context->id, $filename, $trackid, $certificate, $content);

            // Record all of above in local db table
            xmldb_local_iomad_track_save_certificate($trackid, $filename);

            // Debugging
            if ($showresult) {
                mtrace('local_iomad_track: certificate recorded for ' . $user->username . ' in course ' . $courseid . ' filename "' . $filename . '"');
            }
        }
        return true;
    } else {
        return false;
    }
}
