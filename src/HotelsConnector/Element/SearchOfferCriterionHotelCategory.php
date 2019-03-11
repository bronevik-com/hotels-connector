<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Критерий поиска отеля по категории
 * The criterion by hotel star rating
 */
class SearchOfferCriterionHotelCategory extends SearchOfferCriterion
{
    /**
     * Категория отеля
     * The hotel star rating
     *
     * @var int[]
     */
    public $category = [];

    /**
     * @return bool
     */
    public function hasCategory()
    {
        return count($this->category) > 0;
    }

    /**
     * @return int[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param int $category
     */
    public function addCategory($category)
    {
        $this->category[] = $category;
    }
}
