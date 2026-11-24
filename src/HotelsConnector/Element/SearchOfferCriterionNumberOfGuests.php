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
     * Дети.
     * Children.
     *
     * @var Children|null
     */
    public $children;

    /**
     * @param int $adults
     */
    public function setAdults($adults)
    {
        $this->adults = $adults;
    }

    /**
     * @return int
     */
    public function getAdults()
    {
        return $this->adults;
    }

    /**
     * @return bool
     */
    public function hasChildren()
    {
        return !empty($this->children->child);
    }

    /**
     * @return Child[]
     */
    public function getChildren()
    {
        return $this->children === null ? [] : $this->children->child;
    }

    /**
     * @param Child $child
     *
     * @return void
     */
    public function addChild($child)
    {
        if ($this->children === null) {
            $this->children = new Children();
        }

        $this->children->child[] = $child;
    }
}
