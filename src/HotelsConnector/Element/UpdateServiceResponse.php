<?php

namespace Bronevik\HotelsConnector\Element;

class UpdateServiceResponse extends BaseResponse
{
    /**
     * @var Order
     */
    public $order;

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
