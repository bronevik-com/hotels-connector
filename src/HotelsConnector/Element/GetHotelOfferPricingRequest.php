<?php

namespace Bronevik\HotelsConnector\Element;

class GetHotelOfferPricingRequest extends BaseRequest
{
    /**
     * @var Service[]
     */
    public $services = [];

    /**
     * @var SkipElements
     */
    public $skipElements;

    public function __construct()
    {
        parent::__construct();
        $this->skipElements = new SkipElements();
    }

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
     * @return SkipElements
     */
    public function getSkipElements()
    {
        return $this->skipElements;
    }

    /**
     * @param SkipElements $skipElements
     */
    public function setSkipElements($skipElements)
    {
        $this->skipElements = $skipElements;
    }
}
