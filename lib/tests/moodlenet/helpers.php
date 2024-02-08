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

namespace core\moodlenet;

use core\oauth2\issuer;

/**
 * Helper for tests related to MoodleNet integration.
 *
 * @package core
 * @copyright 2023 Michael Hawkins <michaelh@moodle.com>
 * @license https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class helpers {
    /**
     * Create and return a mock MoodleNet issuer.
     *
     * @param int $enabled Whether the issuer is enabled.
     * @return issuer The issuer that has been created.
     */
    public static function get_mock_issuer(int $enabled): issuer {
        $record = (object) [
            'name' => 'MoodleNet',
            'image' => 'https://moodle.net/favicon.ico',
            'baseurl' => 'https://moodlenet.example.com',
            'loginscopes' => '',
            'loginscopesoffline' => '',
            'loginparamsoffline' => '',
            'showonloginpage' => issuer::SERVICEONLY,
            'servicetype' => 'moodlenet',
            'enabled' => $enabled,
        ];
        $issuer = new issuer(0, $record);
        $issuer->create();

        return $issuer;
    }
}
