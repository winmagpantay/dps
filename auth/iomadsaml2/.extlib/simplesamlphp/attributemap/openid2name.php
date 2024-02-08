<?php
$attributemap = [
    // Simple Registration + AX Schema
    'https://axschema.org/namePerson/friendly'     => 'displayName', // Alias/Username -> displayName
    'openid.sreg.nickname'                        => 'displayName',
    'https://axschema.org/contact/email'           => 'mail', // Email
    'openid.sreg.email'                           => 'mail',
    'https://axschema.org/namePerson'              => 'displayName', // Full name -> displayName
    'openid.sreg.fullname'                        => 'displayName',
    'https://axschema.org/contact/postalCode/home' => 'postalCode', // Postal code
    'openid.sreg.postcode'                        => 'postalCode',
    'https://axschema.org/contact/country/home'    => 'countryName', // Country
    'openid.sreg.country'                         => 'countryName',
    'https://axschema.org/pref/language'           => 'preferredLanguage', // Language
    'openid.sreg.language'                        => 'preferredLanguage',
    // Name
    'https://axschema.org/namePerson/prefix'       => 'personalTitle', // Name prefix
    'https://axschema.org/namePerson/first'        => 'givenName', // First name
    'https://axschema.org/namePerson/last'         => 'sn', // Last name

    // Work
    'https://axschema.org/company/name'            => 'o', // Company name
    'https://axschema.org/company/title'           => 'title', // Job title

    // Telephone
    'https://axschema.org/contact/phone/default'   => 'telephoneNumber', // Phone (preferred)
    'https://axschema.org/contact/phone/home'      => 'homePhone', // Phone (home)
    'https://axschema.org/contact/phone/business'  => 'telephoneNumber', // Phone (work)
    'https://axschema.org/contact/phone/cell'      => 'mobile', // Phone (mobile)
    'https://axschema.org/contact/phone/fax'       => 'facsimileTelephoneNumber', // Phone (fax)

    // Further attributes can be found at https://www.axschema.org/types/
];
