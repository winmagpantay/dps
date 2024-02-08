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

namespace mod_bigbluebuttonbn\output;

use mod_bigbluebuttonbn\instance;
use mod_bigbluebuttonbn\recording;
use mod_bigbluebuttonbn\test\testcase_helper_trait;

/**
 * Recording row
 *
 * @package   mod_bigbluebuttonbn
 * @copyright 2010 onwards, Blindside Networks Inc
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author    Laurent David  (laurent.david [at] call-learning [dt] fr)
 */
class recording_row_playback_test extends \advanced_testcase {
    use testcase_helper_trait;

    /**
     * Setup for test
     */
    public function setUp(): void {
        parent::setUp();
        $this->initialise_mock_server();
    }

    /**
     * Recording sample data
     */
    const RECORDING_DATA = [
        [
            'status' => recording::RECORDING_STATUS_PROCESSED,
            'playback' => [
                'format' =>
                    [
                        [

                            'type' => 'podcast',
                            'url' => 'https://mypodcast',
                            'processingTime' => 0,
                            'length' => 0,

                        ],
                        [

                            'type' => 'presentation',
                            'url' => 'https://mypresentation',
                            'processingTime' => 0,
                            'length' => 0,

                        ],
                        [

                            'type' => 'video',
                            'url' => 'https://myvideo',
                            'processingTime' => 0,
                            'length' => 0,

                        ],
                        [

                            'type' => 'settings',
                            'url' => 'https://mysettings',
                            'processingTime' => 0,
                            'length' => 0,

                        ]
                    ]
            ]
        ]
    ];

    /**
     * Should this recording be included ?
     *
     * @param string $role
     * @param array $canview
     * @param object|null $globalsettings
     * @return void
     * @covers       \recording_row_playback::should_be_included
     * @dataProvider should_be_included_data_provider
     */
    public function test_should_be_included(string $role, array $canview, object $globalsettings = null) {
        global $PAGE;
        $this->resetAfterTest();
        ['recordings' => $recordingsdata, 'activity' => $activity] = $this->create_activity_with_recordings(
            $this->get_course(),
            instance::TYPE_ALL,
            self::RECORDING_DATA
        );
        $user = $this->getDataGenerator()->create_user();
        $this->getDataGenerator()->enrol_user($user->id, $activity->course, $role);
        if (!empty($globalsettings)) {
            foreach ((array) $globalsettings as $key => $value) {
                set_config($key, $value);
            }
        }
        $this->setUser($user);
        $recording = new recording(0, $recordingsdata[0]);
        $rowplayback = new recording_row_playback($recording, instance::get_from_instanceid($activity->id));
        $rowinfo = $rowplayback->export_for_template($PAGE->get_renderer('mod_bigbluebuttonbn'));
        $playbacktypes = array_map(function($playback) {
            foreach ($playback->attributes as $attributearray) {
                if (in_array('data-target', $attributearray)) {
                    return $attributearray['value'];
                }
            }
            return '';
        }, $rowinfo->playbacks);
        $this->assertEmpty(array_diff($canview, $playbacktypes));
    }

    /**
     * Data provider for the should be included method
     *
     * @return array
     */
    public function should_be_included_data_provider() {
        return [
            'editingteacher user should see all' => [
                'role' => 'editingteacher',
                'canview' => ['video', 'presentation', 'podcast', 'settings'],
            ],
            'student can see only default' => [
                'role' => 'student',
                'canview' => ['video', 'presentation'],
            ],
            'student can see only default except when we add more format to all users' => [
                'role' => 'student',
                'canview' => ['video', 'presentation', 'settings'],
                'globalsettings' => (object) ['bigbluebuttonbn_recording_safe_formats' => 'video,presentation,settings']
            ]

        ];
    }
}
