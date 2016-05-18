<?php
namespace Bronevik\HotelsConnector\Element;

class SearchOfferCriterionHotelName extends SearchOfferCriterion
{
    /**
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

