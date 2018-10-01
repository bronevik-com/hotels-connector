<?php
namespace Bronevik\HotelsConnector\Element;

class SearchOrderCriterionServiceReferenceId extends SearchOrderCriterion
{
    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $referenceId = null;

    /**
     * 
     * @param string $referenceId 
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;
    }

    /**
     * 
     * @return string
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }
}
