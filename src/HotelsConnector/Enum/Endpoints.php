<?php

namespace Bronevik\HotelsConnector\Enum;

abstract class Endpoints extends Enum
{
    const PRODUCTION  = 'https://hotels-api.bronevik.com/v2.4.0/api.php';
    const DEVELOPMENT = 'https://dev-hotels-api.bronevik.com/v2.4.0/api.php';

    const SECURE_PRODUCTION  = 'https://secure-hotels-api.bronevik.com/v2.4.0/api.php';
    const SECURE_DEVELOPMENT = 'https://dev-secure-hotels-api.bronevik.com/v2.4.0/api.php';

    public static $wsdlUrls = [
        self::PRODUCTION         => 'https://hotels-api.bronevik.com/v2.4.0/api.wsdl',
        self::DEVELOPMENT        => 'https://dev-hotels-api.bronevik.com/v2.4.0/api.wsdl',
        self::SECURE_PRODUCTION  => 'https://hotels-api.bronevik.com/v2.4.0/secure-api.wsdl',
        self::SECURE_DEVELOPMENT => 'https://dev-hotels-api.bronevik.com/v2.4.0/secure-api.wsdl',
    ];
}
