<?php

namespace Bronevik\HotelsConnector\Element;

class GetOrderRequest extends BaseRequest
{
    /**
     * @var int
     */
    public $orderId;

    /**
     * @param int $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }
}
