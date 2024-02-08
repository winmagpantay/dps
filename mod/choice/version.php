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
 * Version information
 *
 * @package   mod_choice
 * @copyright 1999 onwards Martin Dougiamas  {@link https://moodle.com}
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2023042400;       // The current module version (Date: YYYYMMDDXX).
$plugin->requires  = 2023041800;    // Requires this Moodle version.
$plugin->component = 'mod_choice';     // Full name of the plugin (used for diagnostics)
$plugin->cron      = 0;