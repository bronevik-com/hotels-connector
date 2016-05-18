<?php
namespace Bronevik\HotelsConnector\Element;

/**
 * Поиск по количеству человек
 * 
 */
class SearchOfferCriterionNumberOfGuests extends SearchOfferCriterion
{
    /**
     * Количество взрослых
     * Type: 
     * 
     * @var 
     */
    public $adults = null;

    /**
     * 
     * @param  $adults 
     */
    public function setAdults($adults)
    {
        $this->adults = $adults;
    }

    /**
     * 
     */
    public function getAdults()
    {
        return $this->adults;
    }
}

