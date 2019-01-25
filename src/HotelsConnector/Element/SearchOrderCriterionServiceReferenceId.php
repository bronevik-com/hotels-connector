<?php
namespace Bronevik\HotelsConnector\Element;

/**
 * Поиск заказа по номеру услуги в системе клиента
 * The order search by client’s service number
 * 
 */
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

