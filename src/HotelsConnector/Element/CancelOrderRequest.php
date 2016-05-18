<?php
namespace Bronevik\HotelsConnector\Element;

class CancelOrderRequest extends BaseRequest
{
    /**
     * Type: xsd:int
     * 
     * @var int
     */
    public $orderId = null;

    /**
     * 
     * @param int $orderId 
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * 
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }
}

