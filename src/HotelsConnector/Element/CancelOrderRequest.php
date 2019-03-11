<?php

namespace Bronevik\HotelsConnector\Element;

class CancelOrderRequest extends BaseRequest
{
    /**
     * @var int
     */
    public $orderId;

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }
}
