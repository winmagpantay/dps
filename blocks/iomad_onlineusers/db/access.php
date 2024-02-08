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
 * @package   block_iomad_onlineusers
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$capabilities = array(

    'block/iomad_onlineusers:addinstance' => array(

        'captype' => 'read',
        'contextlevel' => CONTEXT_BLOCK
    ),

    'block/iomad_onlineusers:myaddinstance' => array(

        'captype' => 'read',
        'contextlevel' => CONTEXT_BLOCK
    ),

    'block/iomad_onlineusers:viewlist' => array(

        'captype' => 'read',
        'contextlevel' => CONTEXT_BLOCK,
         'archetypes' => array(
            'companymanager' => CAP_ALLOW,
            'companydepartmentmanager' => CAP_ALLOW,
            'clientadministrator' => CAP_ALLOW
        )
    )
);


