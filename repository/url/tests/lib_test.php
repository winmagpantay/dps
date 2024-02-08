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
 * Unit tests for the URL repository.
 *
 * @package   repository_url
 * @copyright 2014 John Okely
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace repository_url;

defined('MOODLE_INTERNAL') || die;

global $CFG;
require_once($CFG->dirroot . '/repository/url/lib.php');


/**
 * URL repository test case.
 *
 * @copyright 2014 John Okely
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class lib_test extends \advanced_testcase {

    /**
     * Check that the url escaper performs as expected
     */
    public function test_escape_url() {
        $this->resetAfterTest();

        $repoid = $this->getDataGenerator()->create_repository('url')->id;

        $conversions = array(
                'https://example.com/test_file.png' => 'https://example.com/test_file.png',
                'https://example.com/test%20file.png' => 'https://example.com/test%20file.png',
                'https://example.com/test file.png' => 'https://example.com/test%20file.png',
                'https://example.com/test file.png?query=string+test&more=string+tests' =>
                    'https://example.com/test%20file.png?query=string+test&more=string+tests',
                'https://example.com/?tag=<p>' => 'https://example.com/?tag=%3Cp%3E',
                'https://example.com/"quoted".txt' => 'https://example.com/%22quoted%22.txt',
                'https://example.com/\'quoted\'.txt' => 'https://example.com/%27quoted%27.txt',
                '' => ''
            );

        foreach ($conversions as $input => $expected) {
            // The constructor uses a optional_param, so we need to hack $_GET.
            $_GET['file'] = $input;
            $repository = new \repository_url($repoid);
            $this->assertSame($expected, $repository->file_url);
        }

        $exceptions = array(
                '%' => true,
                '!' => true,
                '!https://download.moodle.org/unittest/test.jpg' => true,
                'https://download.moodle.org/unittest/test.jpg' => false
            );

        foreach ($exceptions as $input => $expected) {
            $caughtexception = false;
            try {
                // The constructor uses a optional_param, so we need to hack $_GET.
                $_GET['file'] = $input;
                $repository = new \repository_url($repoid);
                $repository->get_listing();
            } catch (\repository_exception $e) {
                if ($e->errorcode == 'validfiletype') {
                    $caughtexception = true;
                }
            }
            $this->assertSame($expected, $caughtexception);
        }

        unset($_GET['file']);
    }

}
