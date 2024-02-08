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
 * Adds data generator support
 *
 * @package    core
 * @category   test
 * @copyright  2012 Petr Skoda {@link https://skodak.org}
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// NOTE: MOODLE_INTERNAL is not verified here because we load this before setup.php!

require_once(__DIR__.'/data_generator.php');
require_once(__DIR__.'/component_generator_base.php');
require_once(__DIR__.'/module_generator.php');
require_once(__DIR__.'/block_generator.php');
require_once(__DIR__.'/default_block_generator.php');
require_once(__DIR__.'/repository_generator.php');
