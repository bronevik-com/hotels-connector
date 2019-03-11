<?php

namespace Bronevik\HotelsConnector\Element;

class SearchOfferCriterionHotelName extends SearchOfferCriterion
{
    /**
     * Название отеля, по которому производится поиск
     * The hotel name for search
     *
     * @var string
     */
    public $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
