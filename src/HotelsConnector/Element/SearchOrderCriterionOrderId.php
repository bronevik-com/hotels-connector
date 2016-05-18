<?php
namespace Bronevik\HotelsConnector\Element;

class SearchOrderCriterionOrderId extends SearchOrderCriterion
{
    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $orderId = null;

    /**
     * 
     * @param string $orderId 
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * 
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }
}

