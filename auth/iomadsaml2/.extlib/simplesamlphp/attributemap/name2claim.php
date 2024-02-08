<?php // Maps AD LDAP to Claims from https://msdn.microsoft.com/en-us/library/hh159803.aspx
$attributemap = [
    'c'               => 'https://schemas.xmlsoap.org/ws/2005/05/identity/claims/country',
    'givenName'       => 'https://schemas.xmlsoap.org/ws/2005/05/identity/claims/givenname',
    'mail'            => 'https://schemas.xmlsoap.org/ws/2005/05/identity/claims/emailaddress',
    'memberOf'        => 'https://schemas.microsoft.com/ws/2008/06/identity/claims/role',
    'postalcode'      => 'https://schemas.xmlsoap.org/ws/2005/05/identity/claims/postalcode',
    'uid'             => 'https://schemas.xmlsoap.org/ws/2005/05/identity/claims/name',
    'sn'              => 'https://schemas.xmlsoap.org/ws/2005/05/identity/claims/surname',
    'st'              => 'https://schemas.xmlsoap.org/ws/2005/05/identity/claims/stateorprovince',
    'streetaddress'   => 'https://schemas.xmlsoap.org/ws/2005/05/identity/claims/streetaddress',
    'telephonenumber' => 'https://schemas.xmlsoap.org/ws/2005/05/identity/claims/otherphone',
];
