<?php
namespace Bronevik\HotelsConnector\Element;

class GetHotelOfferPricingResponse extends BaseResponse
{
    /**
     * Type: tns:OrderServiceAccommodation
     * 
     * @var \Bronevik\HotelsConnector\Element\OrderServiceAccommodation[]
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

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\OrderServiceAccommodation[]
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\OrderServiceAccommodation $services 
     */
    public function addServices($services)
    {
        $this->services[] = $services;
    }
}

