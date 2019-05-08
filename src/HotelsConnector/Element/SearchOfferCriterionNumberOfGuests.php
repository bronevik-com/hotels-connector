<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Поиск по количеству человек
 * The offer search by number of guests
 */
class SearchOfferCriterionNumberOfGuests extends SearchOfferCriterion
{
    /**
     * Количество взрослых
     * Number of adult guests
     *
     * @var int
     */
    public $adults;

    /**
     * @param int $adults
     */
    public function setAdults($adults)
    {
        $this->adults = $adults;
    }

    public function getAdults()
    {
        return $this->adults;
    }
}
