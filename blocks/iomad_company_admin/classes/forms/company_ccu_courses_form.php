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
 * @package   block_iomad_company_admin
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_iomad_company_admin\forms;

use \company_moodleform;
use \company;

class company_ccu_courses_form extends company_moodleform {
    protected $context = null;
    protected $selectedcompany = 0;
    protected $potentialcourses = null;
    protected $currentcourses = null;
    protected $departmentid = 0;
    protected $subhierarchieslist = null;
    protected $companydepartment = 0;
    protected $selectedcourses = 0;
    protected $company = null;
    protected $courses = array();


    public function __construct($actionurl, $context, $companyid, $departmentid, $selectedcourses, $parentlevel) {
        global $DB, $USER;
        $this->selectedcompany = $companyid;
        $this->company = new company($companyid);
        $this->context = $context;
        $this->departmentid = $departmentid;
        $this->selectedcourses = $selectedcourses;

        $options = array('context' => $this->context,
                         'multiselect' => false,
                         'companyid' => $this->selectedcompany,
                         'departmentid' => $departmentid,
                         'subdepartments' => $this->subhierarchieslist,
                         'parentdepartmentid' => $parentlevel,
                         'licenses' => false,
                         'shared' => false);
        $this->companycourses = $this->company->get_menu_courses(true, true);
        $this->companycourses[0] = get_string('all');

        parent::__construct($actionurl);
    }


    public function definition() {
        $this->_form->addElement('hidden', 'companyid', $this->selectedcompany);
        $this->_form->setType('companyid', PARAM_INT);
        $this->_form->addElement('hidden', 'deptid', $this->departmentid);
        $this->_form->setType('deptid', PARAM_INT);
    }


    public function definition_after_data() {
        $mform =& $this->_form;
        // Adding the elements in the definition_after_data function rather than in the definition
        // function so that when the currentcourses or potentialcourses get changed in the process
        // function, the changes get displayed, rather than the lists as they are before processing.

        //$courses = $this->currentcourses->find_courses('');
        if ($this->companycourses) {

        // We are going to cheat and be lazy here.
            $autooptions = array('multiple' => true,
                                 'noselectionstring' => get_string('none'),
                                 'onchange' => 'this.form.submit()');
            $mform->addElement('autocomplete', 'selectedcourses', get_string('selectenrolmentcourse', 'block_iomad_company_admin'), $this->companycourses, $autooptions);
        } else {
            $mform->addElement('html', '<div class="alert alert-warning">' . get_string('nocourses', 'block_iomad_company_admin') . '</div>');
        }

        // Disable the onchange popup.
        $mform->disable_form_change_checker();
    }
}