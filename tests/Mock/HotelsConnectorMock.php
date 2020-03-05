<?php

namespace Bronevik\Tests\Mock;

use Bronevik\HotelsConnector;
use Bronevik\HotelsConnector\Element\Credentials;
use SoapClient;

class HotelsConnectorMock extends HotelsConnector
{
    public function __construct()
    {
        parent::__construct('', '');
        $this->credentials = new Credentials();
    }

    /**
     * @param SoapClient $client
     */
    public function setBaseClient($client)
    {
        $this->soapClient = $client;
    }

    /**
     * @param SoapClient $client
     */
    public function setSecureClient($client)
    {
        $this->secureSoapClient = $client;
    }
}
