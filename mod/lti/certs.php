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
 * This file returns an array of available public keys
 *
 * @package    mod_lti
 * @copyright  2019 Stephen Vickers
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
use mod_lti\local\ltiopenid\jwks_helper;

define('NO_DEBUG_DISPLAY', true);
define('NO_MOODLE_COOKIES', true);

require_once(__DIR__ . '/../../config.php');

@header('Content-Type: application/json; charset=utf-8');

echo json_encode(jwks_helper::get_jwks(), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
