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

namespace tool_brickfield\task;

use tool_brickfield\accessibility;
use tool_brickfield\manager;

/**
 * Task function to run checkid validation for accessibility checks.
 *
 * @package    tool_brickfield
 * @copyright  2020 Brickfield Education Labs https://www.brickfield.ie
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class checkid_validation extends \core\task\scheduled_task {

    /**
     * Return the task's name as shown in admin screens.
     *
     * @return string
     */
    public function get_name(): string {
        return get_string('checkidvalidation', manager::PLUGINNAME);
    }

    /**
     * Execute the task
     */
    public function execute() {
        global $DB;

        // If this feature has been disabled, do nothing.
        if (accessibility::is_accessibility_enabled()) {
            mtrace('Running checkid_validation');

            if ($DB->record_exists(manager::DB_RESULTS, ['checkid' => 0])) {
                $config = get_config(manager::PLUGINNAME);

                $messagebody = get_string('warningcheckidbody', manager::PLUGINNAME);
                $messagesubject = get_string('warningcheckidsubject', manager::PLUGINNAME);

                $receiver = \core_user::get_support_user();
                $receiver->email = !empty($config->warningscontact) ? $config->warningscontact : $receiver->email;
                $noreplyuser = \core_user::get_noreply_user();
                email_to_user($receiver, $noreplyuser, $messagesubject, html_to_text($messagebody), $messagebody);
            }
        }
    }
}
