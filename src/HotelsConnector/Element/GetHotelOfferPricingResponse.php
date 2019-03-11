<?php

namespace Bronevik\HotelsConnector\Element;

class GetHotelOfferPricingResponse extends BaseResponse
{
    /**
     * @var OrderServiceAccommodation[]
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
     * @return OrderServiceAccommodation[]
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @param OrderServiceAccommodation $services
     */
    public function addServices($services)
    {
        $this->services[] = $services;
    }
}
