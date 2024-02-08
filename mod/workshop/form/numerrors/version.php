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
 * Defines the version of workshop Number of errors grading strategy subplugin
 *
 * This code fragment is called by moodle_needs_upgrading() and
 * /admin/index.php
 *
 * @package    workshopform_numerrors
 * @copyright  2009 David Mudrak <david.mudrak@gmail.com>
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version  = 2023042400;
$plugin->requires = 2023041800;  // Requires this Moodle version.
$plugin->component = 'workshopform_numerrors';
