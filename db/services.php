<?php

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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Web service local plugin template external functions and service definitions.
 *
 * @package    local_trigger
 * @copyright  2022 Justin Hunt (justin@poodll.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// We defined the web service functions to install.
$functions = array(
    'local_trigger_register_webhook' => array(
        'classname'   => 'local_trigger_services',
        'methodname'  => 'register_webhook',
        'classpath'   => 'local/trigger/externallib.php',
        'description' => 'Will register a webhook',
        'type'        => 'write',
        'capabilities'=> 'local/trigger:canmanagewebhooks'
    ),

    'local_trigger_deregister_webhook' => array(
            'classname'   => 'local_trigger_services',
            'methodname'  => 'deregister_webhook',
            'classpath'   => 'local/trigger/externallib.php',
            'description' => 'Will deregister a webhook',
            'type'        => 'read',
            'capabilities'=> 'local/trigger:canmanagewebhooks'
    ),

    'local_trigger_sample_webhook' => array(
        'classname'   => 'local_trigger_services',
        'methodname'  => 'sample_webhook',
        'classpath'   => 'local/trigger/externallib.php',
        'description' => 'Will return a sample event data',
        'type'        => 'read',
        'capabilities'=> 'local/trigger:canmanagewebhooks'
    )
);
