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
 * Web services protocols admin UI
 *
 * @package   webservice
 * @copyright 2009 Moodle Pty Ltd (https://moodle.com)
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../config.php');
require_once($CFG->libdir.'/adminlib.php');
require_once($CFG->libdir.'/tablelib.php');

$PAGE->set_url('/' . $CFG->admin . '/webservice/protocols.php');
//TODO: disable the blocks here or better make the page layout default to no blocks!

require_admin();

$returnurl = $CFG->wwwroot . "/" . $CFG->admin . "/settings.php?section=webserviceprotocols";

$action     = optional_param('action', '', PARAM_ALPHANUMEXT);
$webservice = optional_param('webservice', '', PARAM_SAFEDIR);
$confirm    = optional_param('confirm', 0, PARAM_BOOL);

// Get currently installed and enabled auth plugins.
$availablewebservices = core_component::get_plugin_list('webservice');
if (!empty($webservice) and empty($availablewebservices[$webservice])) {
    redirect($returnurl);
}

// Process actions.
if (!confirm_sesskey()) {
    redirect($returnurl);
}

$enabled = ($action == 'enable');
$class = \core_plugin_manager::resolve_plugininfo_class('webservice');
$class::enable_plugin($webservice, $enabled);

redirect($returnurl);
