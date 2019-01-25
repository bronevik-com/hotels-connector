<?php
namespace Bronevik\HotelsConnector\Element;

class UpdateOrderRequest extends BaseRequest
{
    /**
     * Type: tns:Order
     * 
     * @var \Bronevik\HotelsConnector\Element\Order
     */
    public $order = null;

    /**
     * 
     */
    public function __construct()
    {
        $this->order = new \Bronevik\HotelsConnector\Element\Order;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\Order $order 
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\Order
     */
    public function getOrder()
    {
        return $this->order;
    }
}

