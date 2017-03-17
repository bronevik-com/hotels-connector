<?php

namespace Bronevik\HotelsConnector\Enum;

abstract class Endpoints
{
    const PRODUCTION  = 'https://xml.bronevik.com/soap/v2.0/ws_2.0.0.php';
    const DEVELOPMENT = 'https://dev-xml.bronevik.com/soap/v2.0/ws_2.0.0.php';
    const LOCAL       = 'http://xml.bronevik.dev/soap/v2.0/ws_2.0.0.php';
    
    public static $wsdlUrls = [
        self::PRODUCTION  => 'https://xml.bronevik.com/soap/v2.0/ws_2.0.0.wsdl',
        self::DEVELOPMENT => 'https://dev-xml.bronevik.com/soap/v2.0/ws_2.0.0.wsdl',
        self::LOCAL       => 'http://xml.bronevik.dev/soap/v2.0/ws_2.0.0.wsdl',
    ];
}
