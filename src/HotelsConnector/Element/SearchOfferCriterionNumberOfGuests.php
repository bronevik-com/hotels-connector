<?php

namespace Bronevik\HotelsConnector\Element;

use Bronevik\HotelsConnector\Enum\GuestsCounts;

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
     * @see GuestsCounts
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
