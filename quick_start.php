<?php

require_once 'vendor/autoload.php';

use Bronevik\HotelsConnector;
use Bronevik\HotelsConnector\Enum\Endpoints;
use Bronevik\HotelsConnector\Enum\Languages;

$client = new HotelsConnector(Endpoints::DEVELOPMENT);
$client->setCredentials('test', 'test', '123456');
$client->setLanguage(Languages::RUSSIAN);
