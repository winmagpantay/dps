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

namespace tool_brickfield\local\areas\mod_feedback;

use tool_brickfield\local\areas\module_area_base;

/**
 * Feedback activity name observer.
 *
 * @package    tool_brickfield
 * @copyright  2020 onward: Brickfield Education Labs, www.brickfield.ie
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class name extends module_area_base {

    /**
     * Get table name.
     * @return string
     */
    public function get_tablename(): string {
        return 'feedback';
    }

    /**
     * Get field name.
     * @return string
     */
    public function get_fieldname(): string {
        return 'name';
    }
}
