<?php


namespace Bronevik\HotelsConnector\Element;

class OrderServices
{
    /**
     * @var OrderService[]
     */
    public $service = [];

    /**
     * @return OrderService[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param OrderService $service
     */
    public function addService($service)
    {
        $this->service[] = $service;
    }

    public function hasService($service)
    {
        return count($this->service) > 0;
    }
}
