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
 * Class for exporting course_competency_settings data.
 *
 * @package    core_competency
 * @copyright  2016 Damyon Wiese
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace core_competency\external;
defined('MOODLE_INTERNAL') || die();

/**
 * Class for exporting course_competency_settings data.
 *
 * @package    core_competency
 * @copyright  2016 Damyon Wiese
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class course_competency_settings_exporter extends \core\external\persistent_exporter {

    protected static function define_class() {
        return \core_competency\course_competency_settings::class;
    }

}