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

namespace core_external;

/**
 * Exception indicating user is not allowed to use external function in the current context.
 *
 * @package    core_external
 * @copyright  2009 Petr Skodak
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class restricted_context_exception extends \moodle_exception {
    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct('restrictedcontextexception', 'error');
    }
}