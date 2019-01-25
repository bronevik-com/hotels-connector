<?php
namespace Bronevik\HotelsConnector\Element;

class SearchOfferCriterionHotelName extends SearchOfferCriterion
{
    /**
     * Название отеля, по которому производится поиск
     * The hotel name for search
     * Type: xsd:string
     * 
     * @var string
     */
    public $name = null;

    /**
     * 
     * @param string $name 
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}

