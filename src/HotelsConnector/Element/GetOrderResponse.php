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
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param Order $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }
}
