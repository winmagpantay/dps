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
 * The block_iomad_microlearning user assigned event.
 *
 * @package    block_iomad_microlearning
 * @copyright  2019 E-Learn Design Ltd. https://www.e-learndesign.co.uk
 * @author     Derick Turner
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_iomad_microlearning\event;

defined('MOODLE_INTERNAL') || die();

/**
 * The block_iomad_microlearning user assigned event.
 *
 * @property-read array $other {
 *      Extra information about event.
 *
 * }
 *
 * @package    block_iomad_microlearning
 * @since      Moodle 3.3
 * @copyright  2017 E-Learn Design Ltd. https://www.e-learndesign.co.uk
 * @author     Derick Turner
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class user_assigned extends \core\event\base {

    /**
     * Init method.
     *
     * @return void
     */
    protected function init() {
        $this->data['crud'] = 'c';
        $this->data['edulevel'] = self::LEVEL_OTHER;
        $this->data['objecttable'] = 'microlearning_thread';
    }

    /**
     * Return localised event name.
     *
     * @return string
     */
    public static function get_name() {
        return get_string('userassigned', 'block_iomad_microlearning');
    }

    /**
     * Returns description of what happened.
     *
     * @return string
     */
    public function get_description() {
        return "The user with id '$this->userid' assigned the user with id '$this->relateduserid' from the microlearning thread with id '$this->ojectid'";
    }

    /**
     * Get URL related to the action.
     *
     * @return \moodle_url
     */
    public function get_url() {
        return new \moodle_url('/blocks/iomad_microlearning/users.php');
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
