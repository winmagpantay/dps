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
 * Filter post install hook
 *
 * @package    filter_activitynames
 * @copyright  2012 Petr Skoda {@link https://skodak.org}
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function xmldb_filter_activitynames_install() {
    global $CFG;
    require_once("$CFG->libdir/filterlib.php");

    filter_set_global_state('activitynames', TEXTFILTER_ON, 1);
}

