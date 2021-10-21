<?php

namespace Bronevik\HotelsConnector\Element;

use Bronevik\HotelsConnector\Enum\CurrencyCodes;

class GetHotelOfferPricingRequest extends BaseRequest
{
    /**
     * @var Service[]
     */
    public $services = [];

    /**
     * Валюта расчета
     * The payment currency
     *
     * @var string
     * @see CurrencyCodes
     */
    public $currency;

    /**
     * @return bool
     */
    public function hasServices()
    {
        return count($this->services) > 0;
    }

    /**
     * @return Service[]
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @param Service $services
     */
    public function addServices($services)
    {
        $this->services[] = $services;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @see CurrencyCodes
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }
}
