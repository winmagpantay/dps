YUI.add('moodle-atto_underline-button', function (Y, NAME) {

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

/*
 * @package    atto_underline
 * @copyright  2013 Damyon Wiese  <damyon@moodle.com>
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * @module moodle-atto_underline-button
 */

/**
 * Atto text editor underline plugin.
 *
 * @namespace M.atto_underline
 * @class button
 * @extends M.editor_atto.EditorPlugin
 */

Y.namespace('M.atto_underline').Button = Y.Base.create('button', Y.M.editor_atto.EditorPlugin, [], {
    initializer: function() {
        this.addBasicButton({
            exec: 'underline',

            // Key code for the keyboard shortcut which triggers this button:
            keys: '85',

            // Watch the following tags and add/remove highlighting as appropriate:
            tags: 'u'
        });
    }
});


}, '@VERSION@', {"requires": ["moodle-editor_atto-plugin"]});
