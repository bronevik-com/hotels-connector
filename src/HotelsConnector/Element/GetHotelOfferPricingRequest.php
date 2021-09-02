<?php

namespace Bronevik\HotelsConnector\Element;

use Bronevik\HotelsConnector\Enum\CurrencyCodesEnum;

class GetHotelOfferPricingRequest extends BaseRequest
{
    /**
     * @var Service[]
     */
    public $services = [];

    /**
     * @var string
     *
     * @see CurrencyCodesEnum
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
}
