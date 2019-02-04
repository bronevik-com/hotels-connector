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
     * Type: tns:SkipElements
     * 
     * @var \Bronevik\HotelsConnector\Element\SkipElements
     */
    public $skipElements = null;

    /**
     * 
     */
    public function __construct()
    {
        $this->skipElements = new \Bronevik\HotelsConnector\Element\SkipElements;
    }

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

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\SkipElements $skipElements 
     */
    public function setSkipElements($skipElements)
    {
        $this->skipElements = $skipElements;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\SkipElements
     */
    public function getSkipElements()
    {
        return $this->skipElements;
    }
}

