<?php

namespace Bronevik\HotelsConnector\Element;

class SearchOrdersResponse extends BaseResponse
{
    /**
     * @var Orders
     */
    public $orders;

    /**
     * @return Orders
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @param Orders $orders
     */
    public function setOrders($orders)
    {
        $this->orders = $orders;
    }
}
