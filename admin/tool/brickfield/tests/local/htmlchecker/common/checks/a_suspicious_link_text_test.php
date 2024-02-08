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
 * tool_brickfield check test.
 *
 * @package    tool_brickfield
 * @copyright  2020 onward: Brickfield Education Labs, https://www.brickfield.ie
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace tool_brickfield\local\htmlchecker\common\checks;

defined('MOODLE_INTERNAL') || die();

require_once('all_checks.php');

/**
 * Class a_suspicious_link_text
 */
class a_suspicious_link_text_test extends all_checks {
    /** @var string Check type */
    protected $checktype = 'a_suspicious_link_text';

    /** @var string Html fail */
    private $htmlfail = <<<EOD
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN""https://www.w3.org/TR/REC-html40/loose.dtd">
    <html lang="en">
    <head>
    <title>Anchor tag text must be specific</title>
    </head>
    <body>
    <a href="www.youtube.com">click here</a>
    </body>
    </html>
EOD;

    /** @var string Html fail 2 */
    private $htmlfail2 = <<<EOD
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN""https://www.w3.org/TR/REC-html40/loose.dtd">
    <html lang="en">
    <head>
    <title>Anchor tag text must be specific</title>
    </head>
    <body>
        <p><a href="https://www.bbc.com/">www.bbc.com</a></p>
    </body>
    </html>
EOD;

    /** @var string Html pass */
    private $htmlpass = <<<EOD
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN""https://www.w3.org/TR/REC-html40/loose.dtd">
    <html lang="en">
    <head>
    <title>Anchor tag text must be specific</title>
    </head>
    <body>
        <a href="www.youtube.com">YouTube</a>
    </body>
    </html>
EOD;

    /** @var string Html pass 2 */
    private $htmlpass2 = <<<EOD
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN""https://www.w3.org/TR/REC-html40/loose.dtd">
    <html lang="en">
    <head>
    <title>Anchor tag text must be specific</title>
    </head>
    <body>
        <a href="www.youtube.com">https://www.google.com</a>
    </body>
    </html>
EOD;

    /**
     * Test for anchor tags not containing susplicious link text
     */
    public function test_check() {
        $results = $this->get_checker_results($this->htmlpass);
        $this->assertEmpty($results);

        $results = $this->get_checker_results($this->htmlpass2);
        $this->assertEmpty($results);

        $results = $this->get_checker_results($this->htmlfail);
        $this->assertTrue($results[0]->element->tagName == 'a');

        $results = $this->get_checker_results($this->htmlfail2);
        $this->assertTrue($results[0]->element->tagName == 'a');
    }
}