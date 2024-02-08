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
 * Settings for format_topics
 *
 * @package    format_topics
 * @copyright  2020 Amaia Anabitarte <amaia@moodle.com>
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    $url = new moodle_url('/admin/course/resetindentation.php', ['format' => 'topics']);
    $link = html_writer::link($url, get_string('resetindentation', 'admin'));
    $settings->add(new admin_setting_configcheckbox(
        'format_topics/indentation',
        new lang_string('indentation', 'format_topics'),
        new lang_string('indentation_help', 'format_topics').'<br />'.$link,
        1
    ));
}
