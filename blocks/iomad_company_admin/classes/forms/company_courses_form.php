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

use \moodleform;
use \company;
use \iomad;
use \potential_company_course_selector;
use \current_company_course_selector;
use \context_system;
use \stdclass;
use \course_enrolment_manager;

class company_courses_form extends moodleform {
    protected $context = null;
    protected $selectedcompany = 0;
    protected $potentialcourses = null;
    protected $currentcourses = null;
    protected $departmentid = 0;
    protected $subhierarchieslist = null;
    protected $companydepartment = 0;

    public function __construct($actionurl, $context, $companyid, $departmentid, $parentlevel) {
        global $USER;
        $this->selectedcompany = $companyid;
        $this->context = $context;
        $this->departmentid = $departmentid;

        $options = array('context' => $this->context,
                         'companyid' => $this->selectedcompany,
                         'departmentid' => $departmentid,
                         'subdepartments' => $this->subhierarchieslist,
                         'parentdepartmentid' => $parentlevel,
                         'shared' => false,
                         'licenses' => true,
                         'partialshared' => true);
        $this->potentialcourses = new potential_company_course_selector('potentialcourses',
                                                                         $options);
        $this->currentcourses = new current_company_course_selector('currentcourses', $options);

        parent::__construct($actionurl);
    }

    public function definition() {
        $this->_form->addElement('hidden', 'companyid', $this->selectedcompany);
        $this->_form->setType('companyid', PARAM_INT);
    }

    public function definition_after_data() {
        global $OUTPUT;

        $mform =& $this->_form;

        // Adding the elements in the definition_after_data function rather than in the
        // definition function  so that when the currentcourses or potentialcourses get changed
        // in the process function, the changes get displayed, rather than the lists as they
        // are before processing.

        $context = context_system::instance();
        $company = new company($this->selectedcompany);
        $mform->addElement('hidden', 'deptid', $this->departmentid);
        $mform->setType('deptid', PARAM_INT);

        $mform->addElement('html', '<table summary="" class="companycoursetable addremovetable'.
                                   ' generaltable generalbox groupmanagementtable boxaligncenter" cellspacing="0">
            <tr>
              <td id="existingcell">');

        $mform->addElement('html', $this->currentcourses->display(true));

        $mform->addElement('html', '
              </td>
              <td id="buttonscell">
                  <p class="arrow_button">
                    <input name="add" id="add" type="submit" value="' . $OUTPUT->larrow().'&nbsp;'.get_string('add') . '"
                           title="' . get_string('add') .'" class="btn btn-secondary"/><br />
                    <input name="remove" id="remove" type="submit" value="'. get_string('remove').'&nbsp;'.$OUTPUT->rarrow(). '"
                           title="'. get_string('remove') .'" class="btn btn-secondary"/><br />
                 </p>
              </td>
              <td id="potentialcell">');

        $mform->addElement('html', $this->potentialcourses->display(true));

        $mform->addElement('html', '
              </td>
            </tr>
          </table>');

        // Can this user move courses with existing enrollments
        // (which unenrolls those users as a result)?
        if (iomad::has_capability('block/iomad_company_admin:company_course_unenrol', $context)) {
            $mform->addElement('html', get_string('unenrollwarning',
                                                  'block_iomad_company_admin'));
            $mform->addElement('checkbox', 'oktounenroll',
                                get_string('oktounenroll', 'block_iomad_company_admin'));
        } else {
            $mform->addElement('html', get_string('unenrollincapable',
                                                  'block_iomad_company_admin'));
        }
    }

    public function process() {
        global $DB;

        $context = context_system::instance();

        // Get process ok to unenroll confirmation.
        $oktounenroll = optional_param('oktounenroll', false, PARAM_BOOL);

        // Process incoming assignments.
        if (optional_param('add', false, PARAM_BOOL) && confirm_sesskey()) {
            $coursestoassign = $this->potentialcourses->get_selected_courses();
            if (!empty($coursestoassign)) {

                $company = new company($this->selectedcompany);

                foreach ($coursestoassign as $addcourse) {
                    // Check if its a shared course.
                    if ($DB->get_record_sql("SELECT id FROM {iomad_courses}
                                             WHERE courseid=$addcourse->id
                                             AND shared != 0")) {
                        if ($companycourserecord = $DB->get_record('company_course', array('companyid' => $this->selectedcompany,
                                                                                           'courseid' => $addcourse->id))) {
                            // Already assigned to the company so we are just moving it within it.
                            $companycourserecord->departmentid = $this->departmentid;
                            $DB->update_record('company_course', $companycourserecord);
                        } else {
                            $sharingrecord = new stdclass();
                            $sharingrecord->courseid = $addcourse->id;
                            $sharingrecord->companyid = $company->id;
                            $DB->insert_record('company_shared_courses', $sharingrecord);
                            if ($this->departmentid != $this->companydepartment ) {
                                $company->add_course($addcourse, $this->departmentid);
                            } else {
                                $company->add_course($addcourse, $this->companydepartment);
                            }
                        }
                    } else {
                        // If company has enrollment then we must have BOTH
                        // oktounenroll true and the company_course_unenrol capability.
                        if (!empty($addcourse->has_enrollments)) {
                            if (iomad::has_capability('block/iomad_company_admin:company_course_unenrol',
                                                $context) and $oktounenroll) {
                                $this->unenroll_all($addcourse->id);
                                $company->add_course($addcourse);
                            }
                        } else if ($companycourserecord = $DB->get_record('company_course', array('companyid' => $this->selectedcompany,
                                                                                                  'courseid' => $addcourse->id))) {
                            $companycourserecord->departmentid = $this->departmentid;
                            $DB->update_record('company_course', $companycourserecord);
                        } else {
                            if ($this->departmentid != $this->companydepartment ) {
                                $company->add_course($addcourse, $this->departmentid);
                            } else {
                                $company->add_course($addcourse, $this->companydepartment);
                            }
                        }
                    }
                }

                $this->potentialcourses->invalidate_selected_courses();
                $this->currentcourses->invalidate_selected_courses();
            }
        }

        // Process incoming unassignments.
        if (optional_param('remove', false, PARAM_BOOL) && confirm_sesskey()) {
            $coursestounassign = $this->currentcourses->get_selected_courses();
            if (!empty($coursestounassign)) {

                $company = new company($this->selectedcompany);

                foreach ($coursestounassign as $removecourse) {

                    // Check if its a shared course.
                    if ($DB->get_record_sql("SELECT id FROM {iomad_courses}
                                             WHERE courseid=:removecourse
                                             AND shared != 0",
                                             array('removecourse' => $removecourse->id))) {
                        $DB->delete_records('company_shared_courses',
                                             array('companyid' => $company->id,
                                                   'courseid' => $removecourse->id));
                        $DB->delete_records('company_course',
                                             array('companyid' => $company->id,
                                                   'courseid' => $removecourse->id));
                        company::delete_company_course_group($company->id,
                                                             $removecourse,
                                                             $oktounenroll);
                    } else {
                        // If company has enrollment then we must have BOTH
                        // oktounenroll true and the company_course_unenrol capability.
                        if (!empty($removecourse->has_enrollments)) {
                            if (iomad::has_capability('block/iomad_company_admin:company_course_unenrol',
                                                $context) and $oktounenroll) {
                                $this->unenroll_all($removecourse->id);
                                if ($this->departmentid != $this->companydepartment) {
                                    // Dump it into the default company department.
                                    $company->remove_course($removecourse,
                                                            $company->id,
                                                            $this->companydepartment);
                                } else {
                                    // Remove it from the company.
                                    $company->remove_course($removecourse, $company->id);
                                }
                            }
                        } else {
                            if ($this->departmentid != $this->companydepartment) {
                                // Move the course to the company default department.
                                $company->remove_course($removecourse, $company->id,
                                                        $this->companydepartment);
                            } else {
                                $company->remove_course($removecourse, $company->id);
                            }
                        }
                    }
                }

                $this->potentialcourses->invalidate_selected_courses();
                $this->currentcourses->invalidate_selected_courses();
            }
        }
    }

    private function unenroll_all($id) {
        global $DB, $PAGE;
        // Unenroll everybody from given course.

        // Get list of enrollments.
        $course = $DB->get_record('course', array('id' => $id));
        $courseenrolment = new course_enrolment_manager($PAGE, $course);
        $userlist = $courseenrolment->get_users('', 'ASC', 0, 0);
        foreach ($userlist as $user) {
            $ues = $courseenrolment->get_user_enrolments($user->id);
            foreach ($ues as $ue) {
                $courseenrolment->unenrol_user($ue);
            }
        }
    }
}