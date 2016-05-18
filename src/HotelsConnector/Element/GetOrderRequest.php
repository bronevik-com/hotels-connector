<?php
namespace Bronevik\HotelsConnector\Element;

class GetOrderRequest extends BaseRequest
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

