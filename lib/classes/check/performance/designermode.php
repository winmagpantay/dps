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
 * Designer mode
 *
 * @package    core
 * @category   check
 * @copyright  2020 Brendan Heywood <brendan@catalyst-au.net>
 * @copyright  2008 petr Skoda
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace core\check\performance;

defined('MOODLE_INTERNAL') || die();

use core\check\check;
use core\check\result;

/**
 * Designer mode
 *
 * @copyright  2020 Brendan Heywood <brendan@catalyst-au.net>
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class designermode extends check {

    /**
     * Get the short check name
     *
     * @return string
     */
    public function get_name(): string {
        return get_string('themedesignermode', 'admin');
    }

    /**
     * A link to a place to action this
     *
     * @return \action_link|null
     */
    public function get_action_link(): ?\action_link {
        return new \action_link(
            new \moodle_url('/admin/search.php', ['query' => 'themedesignermode']),
            get_string('themedesignermode', 'admin'));
    }

    /**
     * Return result
     * @return result
     */
    public function get_result(): result {
        global $DB, $CFG;

        if (empty($CFG->themedesignermode)) {
            $status = result::OK;
            $summary = get_string('check_themedesignermode_comment_disable', 'report_performance');
        } else {
            $status = result::CRITICAL;
            $summary = get_string('check_themedesignermode_comment_enable', 'report_performance');
        }

        $details = get_string('check_themedesignermode_details', 'report_performance');

        return new result($status, $summary, $details);
    }
}

