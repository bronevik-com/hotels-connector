<?php

namespace Bronevik\HotelsConnector\Element;

class GetOrderResponse extends BaseResponse
{
    /**
     * @var Order
     */
    public $order;

    public function __construct()
    {
        $this->order = new Order();
    }

    /**
     * @param Order $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }
}
