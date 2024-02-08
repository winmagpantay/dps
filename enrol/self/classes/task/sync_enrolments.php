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
 * Sync enrolments task.
 *
 * @package   enrol_self
 * @author    Farhan Karmali <farhan6318@gmail.com>
 * @copyright Farhan Karmali
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace enrol_self\task;

defined('MOODLE_INTERNAL') || die();

/**
 * Sync enrolments task.
 *
 * @package   enrol_self
 * @author    Farhan Karmali <farhan6318@gmail.com>
 * @copyright Farhan Karmali
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class sync_enrolments extends \core\task\scheduled_task {

    /**
     * Name for this task.
     *
     * @return string
     */
    public function get_name() {
        return get_string('syncenrolmentstask', 'enrol_self');
    }

    /**
     * Run task for syncing enrolments.
     */
    public function execute() {
        $enrol = enrol_get_plugin('self');
        $trace = new \text_progress_trace();
        $enrol->sync($trace);
    }

}
