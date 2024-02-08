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
/* jshint node: true, browser: false */
/* eslint-env node */

/**
 * @copyright  2021 Andrew Nicols
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

module.exports = grunt => {
    grunt.loadNpmTasks('grunt-sass');

    grunt.config.merge({
        sass: {
            dist: {
                files: {
                    "theme/boost/style/moodle.css": "theme/boost/scss/preset/default.scss",
                    "theme/classic/style/moodle.css": "theme/classic/scss/classicgrunt.scss"
                }
            },
            options: {
                implementation: require('sass'),
                includePaths: ["theme/boost/scss/", "theme/classic/scss/"]
            }
        },
    });
};