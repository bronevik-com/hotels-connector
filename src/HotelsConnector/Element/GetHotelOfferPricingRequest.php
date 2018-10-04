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
     * @return int[]
     */
    public function getServiceIds()
    {
        return $this->services;
    }

    /**
     *
     * @param int $hotelId
     */
    public function addServiceId($hotelId)
    {
        $this->services[] = $hotelId;
    }
}
