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
 * The block_iomad_approve_access manager approved event.
 *
 * @package    block_iomad_approve_access
 * @copyright  2020 E-Learn Design Ltd. https://www.e-learndesign.co.uk
 * @author     Derick Turner
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_iomad_approve_access\event;

defined('MOODLE_INTERNAL') || die();

/**
 * The block_iomad_approve_access manager approved event.
 *
 * @property-read array $other {
 *      Extra information about event.
 *
 *      - int licenseid: the id of the license.
 *      - int duedate: the timestamp of when to email.
 * }
 *
 * @package    block_iomad_approve_access
 * @since      Moodle 3.2
 * @copyright  2020 E-Learn Design Ltd. https://www.e-learndesign.co.uk
 * @author     Derick Turner
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class manager_approved extends \core\event\base {

    /**
     * Init method.
     *
     * @return void
     */
    protected function init() {
        $this->data['crud'] = 'c';
        $this->data['edulevel'] = self::LEVEL_OTHER;
        $this->data['objecttable'] = 'license';
    }

    /**
     * Return localised event name.
     *
     * @return string
     */
    public static function get_name() {
        return get_string('manager_approved', 'block_iomad_approve_access');
    }

    /**
     * Returns description of what happened.
     *
     * @return string
     */
    public function get_description() {
        return "The user with id '$this->userid' approved access to user id '$this->relateduserid' for trainingevent id '$this->objectid' in course id " .
            $this->courseid;
    }

    /**
     * Get URL related to the action.
     *
     * @return \moodle_url
     */
    public function get_url() {
        return new \moodle_url('/block/iomad_approve_access/approve.php');
    }

    /**
     * Custom validation.
     *
     * @throws \coding_exception
     * @return void
     */
    protected function validate_data() {
        parent::validate_data();

    }

    public static function get_other_mapping() {
        $othermapped = array();

        return $othermapped;
    }
}
