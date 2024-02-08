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
 * local_aws unit tests.
 *
 * @package   local_aws
 * @author    Peter Burnett <peterburnett@catalyst-au.net>
 * @copyright 2020 Catalyst IT
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @covers    \local_aws\local\aws_helper
 */

namespace local_aws;

use local_aws\local\aws_helper;

/**
 * Testcase for the AWS helper.
 *
 * @package    local_aws
 * @author     Peter Burnett <peterburnett@catalyst-au.net>
 * @copyright  2020 Catalyst IT
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class aws_helper_test extends \advanced_testcase {

    public function test_get_proxy_string() {
        global $CFG;
        $this->resetAfterTest();
        // Confirm with no config an empty string is returned.
        $CFG->proxyhost = '';
        $this->assertEquals('', aws_helper::get_proxy_string());

        // Now set some configs.
        $CFG->proxyhost = '127.0.0.1';
        $CFG->proxyuser = 'user';
        $CFG->proxypassword = 'password';
        $CFG->proxyport = '1337';
        $this->assertEquals('user:password@127.0.0.1:1337', aws_helper::get_proxy_string());

        // Now change to SOCKS proxy.
        $CFG->proxytype = 'SOCKS5';
        $this->assertEquals('socks5://user:password@127.0.0.1:1337', aws_helper::get_proxy_string());
    }

}
