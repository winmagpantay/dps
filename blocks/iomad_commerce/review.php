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
 * @package   block_iomad_commerce
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(dirname(__FILE__) . '/../../config.php');
require_once(dirname(__FILE__) . '/../iomad_company_admin/lib.php');

\block_iomad_commerce\helper::require_commerce_enabled();

$context = context_system::instance();
require_login();

// Correct the navbar.
// Set the name for the page.
$linktext = get_string('course_shop_title', 'block_iomad_commerce');
// Set the url.
$linkurl = new moodle_url('/blocks/iomad_commerce/review.php');

// Print the page header.
$PAGE->set_context($context);
$PAGE->set_url($linkurl);
$PAGE->set_pagelayout('base');
$PAGE->set_title($linktext);
$PAGE->set_heading(get_string('review', 'block_iomad_commerce'));

// Build the nav bar.
$PAGE->navbar->add($linktext, $linkurl);
$PAGE->navbar->add(get_string('review', 'block_iomad_commerce'));

// Don't do the pre_order_review_processing on postback.
if (array_key_exists('submitbutton', $_POST)) {
    $basket = \block_iomad_commerce\helper::get_basket();
    $pp = \block_iomad_commerce\helper::get_payment_provider_instance($basket->checkout_method);
} else {
    // Add the rest of the stuff to the basket invoice.
    $basket = \block_iomad_commerce\helper::get_basket();
    $pp = \block_iomad_commerce\helper::get_payment_provider_instance($basket->checkout_method);
    $pp->pre_order_review_processing();
    // Refresh basket info after processing.
    $basket = \block_iomad_commerce\helper::get_basket();
}

$mform = new \block_iomad_commerce\forms\confirmation_form($PAGE->url, $basket, $pp);
$mform->set_data($basket);

$error = '';

if ($mform->is_cancelled()) {
redirect(new moodle_url($CFG->wwwroot . '/blocks/iomad_commerce/basket.php'));

} else if ($data = $mform->get_data()) {

    $error = $pp->confirm();
    if (!$error) {
        redirect(new moodle_url($CFG->wwwroot . '/blocks/iomad_commerce/confirm.php', ['u' => $basket->reference]));
    }
}

echo $OUTPUT->header();

echo $error;

$mform->display();

echo $OUTPUT->footer();
