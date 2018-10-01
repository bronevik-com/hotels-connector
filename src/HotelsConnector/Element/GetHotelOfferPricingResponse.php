<?php

namespace Bronevik\HotelsConnector\Element;

class GetHotelOfferPricingResponse extends BaseResponse
{
    /**
     * @var \Bronevik\HotelsConnector\Element\OrderServiceAccommodationPricing[]
     */
    public $services = [];

    /**
     *
     * @return bool
     */
    public function hasServices()
    {
        return count($this->services) > 0;
    }
}
