<?php
namespace Bronevik\HotelsConnector\Element;

class GetHotelOfferPricingRequest extends BaseRequest
{
    /**
     * Type: tns:Service
     * 
     * @var \Bronevik\HotelsConnector\Element\Service[]
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
     * @return \Bronevik\HotelsConnector\Element\Service[]
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\Service $services 
     */
    public function addServices($services)
    {
        $this->services[] = $services;
    }
}

