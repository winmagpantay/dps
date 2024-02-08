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
 * Role assigned event.
 *
 * @package    core
 * @copyright  2013 Petr Skoda {@link https://skodak.org}
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace core\event;

defined('MOODLE_INTERNAL') || die();

/**
 * Role assigned event.
 *
 * @property-read array $other {
 *      Extra information about event.
 *
 *      - int id: role assigned id.
 *      - string component: name of component.
 *      - int itemid: (optional) id of the item.
 * }
 *
 * @package    core
 * @since      Moodle 2.6
 * @copyright  2013 Petr Skoda {@link https://skodak.org}
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class role_assigned extends base {

    /**
     * Set basic properties for the event.
     */
    protected function init() {
        $this->data['objecttable'] = 'role';
        $this->data['crud'] = 'c';
        $this->data['edulevel'] = self::LEVEL_OTHER;
    }

    /**
     * Returns localised general event name.
     *
     * @return string
     */
    public static function get_name() {
        return get_string('eventroleassigned', 'role');
    }

    /**
     * Returns non-localised event description with id's for admin use only.
     *
     * @return string
     */
    public function get_description() {
        return "The user with id '$this->userid' assigned the role with id '$this->objectid' to the user with id " .
            "'$this->relateduserid'.";
    }

    /**
     * Returns relevant URL.
     * @return \moodle_url
     */
    public function get_url() {
        return new \moodle_url('/admin/roles/assign.php', array('contextid' => $this->contextid, 'roleid' => $this->objectid));
    }

    /**
     * Custom validation.
     *
     * @throws \coding_exception
     * @return void
     */
    protected function validate_data() {
        parent::validate_data();

        if (!isset($this->relateduserid)) {
            throw new \coding_exception('The \'relateduserid\' must be set.');
        }

        if (!isset($this->other['id'])) {
            throw new \coding_exception('The \'id\' value must be set in other.');
        }

        if (!isset($this->other['component'])) {
            throw new \coding_exception('The \'component\' value must be set in other.');
        }
    }

    public static function get_objectid_mapping() {
        return array('db' => 'role', 'restore' => 'role');
    }

    public static function get_other_mapping() {
        $othermapped = array();
        $othermapped['id'] = array('db' => 'role_assignments', 'restore' => base::NOT_MAPPED);
        $othermapped['itemid'] = base::NOT_MAPPED;

        return $othermapped;
    }
}