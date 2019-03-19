<?php

namespace Bronevik\HotelsConnector\Element;

class UpdateOrderRequest extends BaseRequest
{
    /**
     * @var Order
     */
    public $order;

    public function __construct()
    {
        parent::__construct();
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
