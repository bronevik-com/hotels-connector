<?php

namespace Bronevik\HotelsConnector\Element;

class GetOrderInvoicesRequest extends BaseRequest
{
    /**
     * Идентификатор заказа
     * Order ID
     *
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
