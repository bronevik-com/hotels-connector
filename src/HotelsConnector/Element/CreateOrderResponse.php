<?php
namespace Bronevik\HotelsConnector\Element;

/**
 * Ответ на запрос по созданию заказа
 * The response for create the order
 * 
 */
class CreateOrderResponse extends BaseResponse
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

