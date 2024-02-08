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
 * @package   mod_trainingevent
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['trainingevent:addinstance'] = 'Add a training event activity';

$string['action'] = 'Action';
$string['alertteachers'] = 'Alert teachers by email';
$string['alertteachers_help'] = 'If this option is checked an email will also be sent to the teachers if a user is added or removed to the training event.';
$string['alreadybookedondates'] = 'You are already booked to an event on these dates';
$string['alreadyenrolled'] = 'You are already signed up for another event';
$string['approvalrequested'] = 'Approval pending';
$string['approvaldenied'] = 'Your previous request  was rejected.';
$string['approvaltype'] = 'Approval required';
$string['attend'] = 'Mark as attending';
$string['attending'] = 'Attending';
$string['bookuser'] = 'Book user';
$string['both'] = 'Manager and company manager';
$string['capacity'] = 'Capacity';
$string['calendarend'] = '{$a} closes';
$string['calendarstart'] = '{$a} opens';
$string['calendartitle'] = 'Attending {$a->coursename} event {$a->eventname}';
$string['chosenclassroomunavailable'] = 'The chosen location is already in use';
$string['companymanager'] = 'Company manager';
$string['trainingevent:add'] = 'Add a user to a training event';
$string['trainingevent:addoverride'] = 'Add a user to a training event - ignoring other restrictions.';
$string['trainingevent:grade'] = 'Allow grading of classroom events';
$string['trainingevent:invite'] = 'Allow inviting of users to classroom event';
$string['trainingevent:resetattendees'] = 'Clear atendees of classroom events';
$string['trainingevent:viewattendees'] = 'View atendees of classroom events';
$string['details'] = '* See more and booking';
$string['emailssent'] = 'Emails have been sent';
$string['enddatetime'] = 'End date/time';
$string['enrolonly'] = 'User added manually';
$string['enrolledonly'] = 'You need to be enrolled onto this by your manager';
$string['event'] = 'Training event';
$string['eventhaspassed'] = 'The starting time for this event has already passed';
$string['eventislocked'] = 'This training event is locked and no further changes can be made';
$string['exclusive'] = 'Exclusive signup';
$string['exclusive_help'] = 'If this option is checked users will only be able to sign up to one of the exclusive training events within the course';
$string['exportcalendar'] = 'Export calendar link';
$string['fullybooked'] = '<h2>This training event is fully booked</h2>';
$string['invalidclassroom'] = 'Please select a valid location';
$string['location'] = 'Room name/number';
$string['lockdays'] = 'Lock event (days) before';
$string['lockdays_help'] = 'If this option is enabled students will not be able to enrol or remove themselves from the training event this number of days before the start date';
$string['manager'] = 'Department manager';
$string['missingenddatetime'] = 'Missing end date/time';
$string['missingstartdatetime'] = 'Missing start date/time';
$string['mod/trainingevent:invite'] = 'User can invite department users to an event';
$string['mod/trainingevent:viewattendees'] = 'User can view the current list of attendees';
$string['mod/trainingevent:resetattendees'] = 'User can reset the list of attendees';
$string['modulename'] = 'Training event';
$string['modulename_help'] = 'A training event allows for face to face training workshops to be added to a course.  It uses the company defined training locations and can have a complex booking and approval method to allow access for users.';
$string['modulenameplural'] = 'Training events';
$string['none'] = 'No approval required';
$string['of'] = ' used of ';
$string['onwaitinglist'] = 'On waiting list';
$string['pluginadministration'] = 'Training event administration';
$string['pluginname'] = 'Training Event';
$string['privacy:metadata'] = 'The IOMAD training event activity only shows data stored in other locations.';
$string['privacy:metadata:trainingeventid:trainingeventid'] = 'The training event id.';
$string['privacy:metadata:trainingeventid:id'] = 'Id from the {trainingevent_users} table';
$string['privacy:metadata:trainingeventid:userid'] = 'The user id';
$string['privacy:metadata:trainingevent_users'] = 'Users array';
$string['publish'] = 'Publish this event by email';
$string['publishwaitlist'] = 'Publish this event by email to waitlist only';
$string['remove'] = 'Remove';
$string['resetattending'] = 'Clear Attendees';
$string['removerequest'] = 'Withdraw approval request';
$string['request'] = 'Request approval to attend';
$string['requestagain'] = 'Re-request approval to attend';
$string['selectaroom'] = 'Select a training location';
$string['selectother'] = 'Book another user to this event';
$string['sendingemails'] = 'Sending emails to advertise this event';
$string['sendreminder'] = 'Send reminder email (days)';
$string['sendreminder_help'] = 'If this is enabled a reminder email will be sent out to participants this number of days before the event';
$string['sendreminderemails'] = 'Task which sends out the reminder emails';
$string['startdatetime'] = 'Start date/time';
$string['summary'] = 'Summary';
$string['trainingeventintro'] = 'Description';
$string['trainingeventname'] = 'Name';
$string['unattend'] = 'Mark as not attending';
$string['useraddedsuccessfully'] = 'User was added to this event';
$string['usermovedsuccessfully'] = 'User was moved to another event';
$string['userremovedsuccessfully'] = 'User was removed from this event';
$string['waitlist'] = 'Mark as waiting to attend';
$string['viewattendees'] = 'View the attendee list';
$string['viewwaitlist'] = 'View the waitlist';
$string['youareattending'] = '<p>You are booked as attending</p>';
$string['youarewaiting'] = 'You are waiting for an available space';
$string['haswaitinglist'] = 'Include waiting list';
$string['haswaitinglist_help'] = 'If you endclude a waiting list with your event then users will be able to sign up to the waiting list for that even if the event is already full';
$string['maxsize'] = 'Override training location size to';
$string['maxsize_help'] = 'Setting a value here will override the default room size for the training room you have selected.';
