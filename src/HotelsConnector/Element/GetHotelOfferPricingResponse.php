<?php

namespace Bronevik\HotelsConnector\Element;

class GetHotelOfferPricingResponse extends BaseResponse
{
    /**
     * @var OrderServices[]
     */
    public $services;

    /**
     * @return OrderServices[]
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @param OrderServices[] $services
     */
    public function setServices($services)
    {
        $this->services = $services;
    }
}
