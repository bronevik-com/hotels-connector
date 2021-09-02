<?php


namespace Bronevik\HotelsConnector\Element;


class GetServicePricingResponse
{
    /**
     * @var Order | null
     */
    public $order = null;

    /**
     * @return Order|null
     */
    public function getOrder()
    {
        return $this->order;
    }
}
