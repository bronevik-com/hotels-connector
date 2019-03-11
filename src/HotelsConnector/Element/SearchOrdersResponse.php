<?php

namespace Bronevik\HotelsConnector\Element;

class SearchOrdersResponse extends BaseResponse
{
    /**
     * @var Order[]
     */
    public $orders = [];

    /**
     * @return bool
     */
    public function hasOrders()
    {
        return count($this->orders) > 0;
    }

    /**
     * @return Order[]
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @param Order $orders
     */
    public function addOrders($orders)
    {
        $this->orders[] = $orders;
    }
}
