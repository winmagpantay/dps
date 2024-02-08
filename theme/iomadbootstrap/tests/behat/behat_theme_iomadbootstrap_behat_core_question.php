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

// NOTE: no MOODLE_INTERNAL test here, this file may be required by behat before including /config.php.

require_once(__DIR__ . '/../../../../question/tests/behat/behat_core_question.php');
use Behat\Gherkin\Node\TableNode as TableNode;

/**
 * Step definitions related to blocks overrides for the IOMAD Bootstrap theme.
 *
 * @package    theme_iomadbootstrap
 * @category   test
 * @copyright 2022 Derick Turner
 * @author    Derick Turner
 * @based on theme_classic by Bas Brands
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class behat_theme_iomadbootstrap_behat_core_question extends behat_core_question {
    /**
     * Creates a question in the current course questions bank with the provided data.
     * This step can only be used when creating question types composed by a single form.
     *
     * @param string $questiontypename The question type name
     * @param TableNode $questiondata The data to fill the question type form.
     */
    public function i_add_a_question_filling_the_form_with($questiontypename, TableNode $questiondata) {

        // Go to question bank.
        $this->execute("behat_general::click_link", get_string('questionbank', 'question'));

        // Click on create question.
        $this->execute('behat_forms::press_button', get_string('createnewquestion', 'question'));

        // Add question.
        $this->finish_adding_question($questiontypename, $questiondata);
    }
}
