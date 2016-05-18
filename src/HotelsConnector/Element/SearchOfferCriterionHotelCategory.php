<?php
namespace Bronevik\HotelsConnector\Element;

/**
 * Критерий поиска отеля по категории
 * 
 */
class SearchOfferCriterionHotelCategory extends SearchOfferCriterion
{
    /**
     * Номер категории отеля от 0 до 5
     * Type: xsd:int
     * 
     * @var int[]
     */
    public $category = [];

    /**
     * 
     * @return bool
     */
    public function hasCategory()
    {
        return count($this->category) > 0;
    }

    /**
     * 
     * @return int[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * 
     * @param int $category 
     */
    public function addCategory($category)
    {
        $this->category[] = $category;
    }
}

