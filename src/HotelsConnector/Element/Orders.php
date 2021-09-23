<?php


namespace Bronevik\HotelsConnector\Element;

class Orders
{
    /**
     * @var Order[]
     */
    public $order = [];

    /**
     * @return Order[]
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param Order $order
     */
    public function addOrder($order)
    {
        $this->order[] = $order;
    }

    /**
     * @return bool
     */
    public function hasOrder()
    {
        return count($this->order) > 0;
    }
}
