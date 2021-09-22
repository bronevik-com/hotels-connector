<?php

namespace Bronevik\HotelsConnector\Element;

class GetHotelOfferPricingRequest extends BaseRequest
{
    /**
     * @var Service[]
     */
    public $services = [];

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
