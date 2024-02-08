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
 * @package   local_report_completion
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Define the Iomad menu items that are defined by this plugin

function local_report_completion_menu() {

        return array(
            'completion' => array(
                'category' => 'Reports',
                'tab' => 8,
                'name' => get_string('pluginname', 'local_report_completion'),
                'url' => '/local/report_completion/index.php',
                'cap' => 'local/report_completion:view',
                'icondefault' => 'report',
                'style' => 'report',
                'icon' => 'fa-check-square-o',
                'iconsmall' => 'fa-bar-chart-o',
            ),
        );
}