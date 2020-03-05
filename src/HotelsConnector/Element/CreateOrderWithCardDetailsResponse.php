<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Ответ на запрос по созданию заказа
 * The response for create the order
 */
class CreateOrderWithCardDetailsResponse extends BaseResponse
{
    /**
     * @var Order
     */
    public $order = null;

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
