<?php
namespace Bronevik\HotelsConnector\Element;

class SearchOrderCriterionServiceId extends SearchOrderCriterion
{
    /**
     * Type: xsd:int
     * 
     * @var int
     */
    public $serviceId = null;

    /**
     * 
     * @param int $serviceId 
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;
    }

    /**
     * 
     * @return int
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }
}

