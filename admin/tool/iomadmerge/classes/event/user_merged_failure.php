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
 * The user_merged_failure event.
 *
 * Version information
 *
 * @package    tool
 * @subpackage iomadmerge
 * @copyright  Derick Turner
 * @author     Derick Turner
 * @basedon    admin tool merge by:
 * @author     Nicolas Dunand <Nicolas.Dunand@unil.ch>
 * @author     Mike Holzer
 * @author     Forrest Gaston
 * @author     Juan Pablo Torres Herrera
 * @author     Jordi Pujol-Ahulló, SREd, Universitat Rovira i Virgili
 * @author     John Hoopes <hoopes@wisc.edu>, University of Wisconsin - Madison
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace tool_iomadmerge\event;
defined('MOODLE_INTERNAL') || die();

/**
 * Class user_merged_failure called when merging user accounts has gone wrong.
 *
 * @package tool_iomadmerge
 * @author Gerard Cuello Adell <gerard.urv@gmail.com>
 * @copyright 2016 Servei de Recursos Educatius (https://www.sre.urv.cat)
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class user_merged_failure extends user_merged {

    public static function get_name() {
        return get_string('eventusermergedfailure', 'tool_iomadmerge');
    }

    public static function get_legacy_eventname() {
        return 'merging_failed';
    }

    public function get_description() {
        return "The user {$this->userid} tried to merge all user-related data records
            from '{$this->other['usersinvolved']['fromid']}' into '{$this->other['usersinvolved']['toid']}' but faild";
    }

}
