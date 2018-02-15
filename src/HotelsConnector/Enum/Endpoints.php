<?php

namespace Bronevik\HotelsConnector\Enum;

abstract class Endpoints
{
    const PRODUCTION  = 'https://hotels-api.bronevik.com/v2.0.1/api.php';
    const DEVELOPMENT = 'https://dev-hotels-api.bronevik.com/v2.0.1/api.php';

    public static $wsdlUrls = [
        self::PRODUCTION  => 'https://hotels-api.bronevik.com/v2.0.1/api.wsdl',
        self::DEVELOPMENT => 'https://dev-hotels-api.bronevik.com/v2.0.1/api.wsdl',
    ];
}
