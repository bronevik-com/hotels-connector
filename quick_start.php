<?php

require_once 'vendor/autoload.php';

use Bronevik\HotelsConnector;
use Bronevik\HotelsConnector\Enum\Endpoints;
use Bronevik\HotelsConnector\Enum\Languages;

$connector = new HotelsConnector(Endpoints::DEVELOPMENT);
$connector->setCredentials('login', 'password', 'privateKey');
$connector->setLanguage(Languages::RUSSIAN);
