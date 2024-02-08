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
 * The mod_wiki course module viewed event.
 *
 * @package    mod_wiki
 * @copyright  2013 Rajesh Taneja <rajesh@moodle.com>
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_wiki\event;
defined('MOODLE_INTERNAL') || die();

/**
 * The mod_wiki course module viewed event class.
 *
 * @package    mod_wiki
 * @since      Moodle 2.7
 * @copyright  2013 Rajesh Taneja <rajesh@moodle.com>
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class course_module_viewed extends \core\event\course_module_viewed {

    /**
     * Init method.
     *
     * @return void
     */
    protected function init() {
        $this->data['crud'] = 'r';
        $this->data['edulevel'] = self::LEVEL_PARTICIPATING;
        $this->data['objecttable'] = 'wiki';
    }

    public static function get_objectid_mapping() {
        return array('db' => 'wiki', 'restore' => 'wiki');
    }
}