<?php

namespace Bronevik\HotelsConnector\Enum;

abstract class Endpoints
{
    const PRODUCTION  = 'https://hotels-api.bronevik.com/v2.2.0/api.php';
    const DEVELOPMENT = 'https://hotels-api.dev.bronevik.tech/v2.2.0/api.php';

    public static $wsdlUrls = [
        self::PRODUCTION  => 'https://hotels-api.bronevik.com/v2.2.0/api.wsdl',
        self::DEVELOPMENT => 'https://hotels-api.dev.bronevik.tech/v2.2.0/api.wsdl',
    ];
}
