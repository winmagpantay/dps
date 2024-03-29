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
 * Cache data source for the time of the last message between users.
 *
 * @package    core_message
 * @category   cache
 * @copyright  2016 Ryan Wyllie <ryan@moodle.com>
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace core_message;

defined('MOODLE_INTERNAL') || die();

/**
 * Cache data source for the time of the last message in a conversation.
 *
 * @package    core_message
 * @category   cache
 * @copyright  2016 Ryan Wyllie <ryan@moodle.com>
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class time_last_message_between_users implements \cache_data_source {

    /** @var time_last_message_between_users the singleton instance of this class. */
    protected static $instance = null;

    /**
     * Returns an instance of the data source class that the cache can use for loading data using the other methods
     * specified by the cache_data_source interface.
     *
     * @param \cache_definition $definition
     * @return object
     */
    public static function get_instance_for_cache(\cache_definition $definition) {
        if (is_null(self::$instance)) {
            self::$instance = new time_last_message_between_users();
        }
        return self::$instance;
    }

    /**
     * Loads the data for the key provided ready formatted for caching.
     *
     * @param string|int $key The key to load.
     * @return mixed What ever data should be returned, or false if it can't be loaded.
     */
    public function load_for_cache($key) {
        $message = api::get_most_recent_conversation_message($key);

        if ($message) {
            return $message->timecreated;
        } else {
            return null;
        }
    }

    /**
     * Loads several keys for the cache.
     *
     * @param array $keys An array of keys each of which will be string|int.
     * @return array An array of matching data items.
     */
    public function load_many_for_cache(array $keys) {
        $results = [];

        foreach ($keys as $key) {
            $results[] = $this->load_for_cache($key);
        }

        return $results;
    }
}
