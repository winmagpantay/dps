<?php
// This file is NOT a part of Moodle - https://moodle.org/
//
// This client for Moodle 2 is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//

/**
 * XML-RPC client for Moodle 2
 *
 * @author Guido Hornig lern.link , copied from Jerome Mouneyrac
 */
//error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', true);

require(dirname(__FILE__) . '/config.php');

$functionname = 'block_iomad_company_admin_create_licenses';


/// PARAMETERS

$licenses = [
        "name" => 'lic-name4',
        "allocation" => 77,
        "validlength" => 30,
        "startdate" => time(),
        "expirydate" =>  strtotime('+1 week'),
        "used" => 44,
        "companyid" => 5,
        "parentid" => 0,
        "courses" => [["courseid"=> "5"]],
    ];


$params = array($licenses);

// XML-RPC CALL
$serverurl = $domainname . '/webservice/xmlrpc/server.php' . '?wstoken=' . $token;

require_once('./curl.php');
$curl = new curl;
$post = xmlrpc_encode_request($functionname, array($params));
//var_dump($post); //die;
$resp = xmlrpc_decode($curl->post($serverurl, $post));
var_dump($resp);
