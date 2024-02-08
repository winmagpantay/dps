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
 * Editor interface for setting editor values.
 *
 * @package    behat
 * @category   test
 * @copyright  2022 Andrew Lyons <andrew@nicols.co.uk>
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace core_behat;

interface settable_editor {

    /**
     * Set the editor value.
     *
     * @param string $editorid The id of the editor within the page
     * @param string $value The intended content of the editor
     */
    public function set_editor_value(string $editorid, string $value): void;
}
