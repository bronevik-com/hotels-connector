<?php
namespace Bronevik\HotelsConnector\Element;

class SearchOrdersResponse extends BaseResponse
{
    /**
     * Type: tns:Order
     * 
     * @var \Bronevik\HotelsConnector\Element\Order[]
     */
    public $orders = [];

    /**
     * 
     * @return bool
     */
    public function hasOrders()
    {
        return count($this->orders) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\Order[]
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\Order $orders 
     */
    public function addOrders($orders)
    {
        $this->orders[] = $orders;
    }
}

