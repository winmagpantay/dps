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
 * This page lets users to manage site wide competencies.
 *
 * @package    tool_templatelibrary
 * @copyright  2015 Damyon Wiese
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../../config.php');
require_once($CFG->libdir.'/adminlib.php');

admin_externalpage_setup('tooltemplatelibrary');

$component = optional_param('component', '', PARAM_COMPONENT);
$search = optional_param('search', '', PARAM_RAW);

$title = get_string('templates', 'tool_templatelibrary');
$pagetitle = get_string('searchtemplates', 'tool_templatelibrary');
// Set up the page.
$url = new moodle_url("/admin/tool/templatelibrary/index.php", array('component' => $component, 'search' => $search));
$PAGE->set_url($url);
$PAGE->set_title($title);
$PAGE->set_heading($title);
$output = $PAGE->get_renderer('tool_templatelibrary');
echo $output->header();
echo $output->heading($pagetitle);

$page = new \tool_templatelibrary\output\list_templates_page($component, $search);
echo $output->render($page);

echo $output->footer();
