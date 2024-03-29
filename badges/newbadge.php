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
 * First step page for creating a new badge
 *
 * @package    core
 * @subpackage badges
 * @copyright  2012 onwards Totara Learning Solutions Ltd {@link https://www.totaralms.com/}
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     Yuliya Bozhko <yuliya.bozhko@totaralms.com>
 */

require_once(__DIR__ . '/../config.php');
require_once($CFG->libdir . '/badgeslib.php');

$type = required_param('type', PARAM_INT);
$courseid = optional_param('id', 0, PARAM_INT);

require_login();

if (empty($CFG->enablebadges)) {
    throw new \moodle_exception('badgesdisabled', 'badges');
}

if (empty($CFG->badges_allowcoursebadges) && ($type == BADGE_TYPE_COURSE)) {
    throw new \moodle_exception('coursebadgesdisabled', 'badges');
}

$title = get_string('create', 'badges');
$PAGE->add_body_class('limitedwidth');

if (($type == BADGE_TYPE_COURSE) && ($course = $DB->get_record('course', array('id' => $courseid)))) {
    require_login($course);
    $coursecontext = context_course::instance($course->id);
    $PAGE->set_context($coursecontext);
    $PAGE->set_pagelayout('incourse');
    $PAGE->set_url('/badges/newbadge.php', array('type' => $type, 'id' => $course->id));
    $heading = format_string($course->fullname, true, array('context' => $coursecontext)) . ": " . $title;
    $PAGE->set_heading($heading);
    $PAGE->set_title($heading);
} else {
    $PAGE->set_context(context_system::instance());
    $PAGE->set_pagelayout('admin');
    $PAGE->set_url('/badges/newbadge.php', array('type' => $type));
    $PAGE->set_heading($title);
    $PAGE->set_title($title);
}

require_capability('moodle/badges:createbadge', $PAGE->context);

$fordb = new stdClass();
$fordb->id = null;

$form = new \core_badges\form\badge($PAGE->url, array('action' => 'new'));

if ($form->is_cancelled()) {
    redirect(new moodle_url('/badges/index.php', array('type' => $type, 'id' => $courseid)));
} else if ($data = $form->get_data()) {
    // Creating new badge here.
    $now = time();

    $fordb->name = $data->name;
    $fordb->version = $data->version;
    $fordb->language = $data->language;
    $fordb->description = $data->description;
    $fordb->imageauthorname = $data->imageauthorname;
    $fordb->imageauthoremail = $data->imageauthoremail;
    $fordb->imageauthorurl = $data->imageauthorurl;
    $fordb->imagecaption = $data->imagecaption;
    $fordb->timecreated = $now;
    $fordb->timemodified = $now;
    $fordb->usercreated = $USER->id;
    $fordb->usermodified = $USER->id;

    if (badges_open_badges_backpack_api() == OPEN_BADGES_V1) {
        $fordb->issuername = $data->issuername;
        $fordb->issuerurl = $data->issuerurl;
        $fordb->issuercontact = $data->issuercontact;
    } else {
        $url = parse_url($CFG->wwwroot);
        $fordb->issuerurl = $url['scheme'] . '://' . $url['host'];
        $fordb->issuername = $CFG->badges_defaultissuername;
        $fordb->issuercontact = $CFG->badges_defaultissuercontact;
    }

    $fordb->expiredate = ($data->expiry == 1) ? $data->expiredate : null;
    $fordb->expireperiod = ($data->expiry == 2) ? $data->expireperiod : null;
    $fordb->type = $type;
    $fordb->courseid = ($type == BADGE_TYPE_COURSE) ? $courseid : null;
    $fordb->messagesubject = get_string('messagesubject', 'badges');
    $fordb->message = get_string('messagebody', 'badges',
            html_writer::link($CFG->wwwroot . '/badges/mybadges.php', get_string('managebadges', 'badges')));
    $fordb->attachment = 1;
    $fordb->notification = BADGE_MESSAGE_NEVER;
    $fordb->status = BADGE_STATUS_INACTIVE;

    $newid = $DB->insert_record('badge', $fordb, true);

    // Trigger event, badge created.
    $eventparams = array('objectid' => $newid, 'context' => $PAGE->context);
    $event = \core\event\badge_created::create($eventparams);
    $event->trigger();

    $newbadge = new badge($newid);
    badges_process_badge_image($newbadge, $form->save_temp_file('image'));
    // If a user can configure badge criteria, they will be redirected to the criteria page.
    if (has_capability('moodle/badges:configurecriteria', $PAGE->context)) {
        redirect(new moodle_url('/badges/criteria.php', array('id' => $newid)));
    }
    redirect(new moodle_url('/badges/overview.php', array('id' => $newid)));
}

echo $OUTPUT->header();
echo $OUTPUT->box('', 'notifyproblem hide', 'check_connection');

$form->display();

echo $OUTPUT->footer();
