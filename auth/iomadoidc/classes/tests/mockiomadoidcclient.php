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
 * Mock IOMAD OIDC client used in unit test.
 *
 * @package auth_iomadoidc
 * @author James McQuillan <james.mcquillan@remote-learner.net>
 * @license https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @copyright (C) 2014 onwards Microsoft, Inc. (https://microsoft.com/)
 */

namespace auth_iomadoidc\tests;

defined('MOODLE_INTERNAL') || die();

/**
 * A mock iomadoidcclient class providing access to all inaccessible properties/methods.
 */
class mockiomadoidcclient extends \auth_iomadoidc\iomadoidcclient {
    /** @var \auth_iomadoidc\httpclientinterface An HTTP client to use. */
    public $httpclient;

    /** @var array Array of endpoints. */
    public $endpoints = [];

    /**
     * Stub method to access protected parent method.
     *
     * @param bool $promptlogin Whether to prompt for login or use existing session.
     * @param array $stateparams Parameters to store as state.
     * @param array $extraparams Additional parameters to send with the IOMAD OIDC request.
     * @return array Array of request parameters.
     */
    public function getauthrequestparams($promptlogin = false, array $stateparams = array(), array $extraparams = array()) {
        return parent::getauthrequestparams($promptlogin, $stateparams);
    }
}
