<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Поиск заказа по ID
 * The order search by order ID
 */
class SearchOrderCriterionOrderId extends SearchOrderCriterion
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
