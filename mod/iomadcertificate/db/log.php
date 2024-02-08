<?php

// This file is part of the Certificate module for Moodle - https://moodle.org/
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
 * @package   mod_iomadcertificate
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @basedon   mod_certificate by Mark Nelson <markn@moodle.com>
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$logs = array(
    array('module'=>'iomadcertificate', 'action'=>'view', 'mtable'=>'iomadcertificate', 'field'=>'name'),
    array('module'=>'iomadcertificate', 'action'=>'add', 'mtable'=>'iomadcertificate', 'field'=>'name'),
     array('module'=>'iomadcertificate', 'action'=>'update', 'mtable'=>'iomadcertificate', 'field'=>'name'),
    array('module'=>'iomadcertificate', 'action'=>'received', 'mtable'=>'iomadcertificate', 'field'=>'name'),
);
