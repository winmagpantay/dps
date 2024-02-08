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

namespace theme_iomadbootstrap;

/**
 * Unit tests for scss compilation.
 *
 * @package   theme_iomadbootstrap
 * @category  test
 * @copyright 2022 Derick Turner
 * @author    Derick Turner
 * @based on theme_classic by Bas Brands
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class scss_test extends \advanced_testcase {
    /**
     * Test that iomadbootstrap can be compiled using SassC (the defacto implemention).
     */
    public function test_scss_compilation_with_sassc() {
        if (!defined('PHPUNIT_PATH_TO_SASSC')) {
            $this->markTestSkipped('Path to SassC not provided');
        }

        $this->resetAfterTest();
        set_config('pathtosassc', PHPUNIT_PATH_TO_SASSC);

        $this->assertNotEmpty(
            \theme_config::load('iomadbootstrap')->get_css_content_debug('scss', null, null)
        );
    }
}