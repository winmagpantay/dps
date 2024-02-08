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
 * IMSCP export lib
 *
 * @package    booktool_exportimscp
 * @copyright  2011 Petr Skoda {@link https://skodak.org}
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

/**
 * Adds module specific settings to the settings block
 *
 * @param settings_navigation $settings The settings navigation object
 * @param navigation_node $node The node to add module settings to
 */
function booktool_exportimscp_extend_settings_navigation(settings_navigation $settings, navigation_node $node) {
    if (has_capability('booktool/exportimscp:export', $settings->get_page()->cm->context)) {
        $url = new moodle_url('/mod/book/tool/exportimscp/index.php', array('id' => $settings->get_page()->cm->id));
        $icon = new pix_icon('generate', '', 'booktool_exportimscp', array('class'=>'icon'));
        $umscpnode = $node->add(get_string('generateimscp', 'booktool_exportimscp'), $url,
            navigation_node::TYPE_SETTING, null, null, $icon);
        $umscpnode->set_force_into_more_menu(true);
    }
}
