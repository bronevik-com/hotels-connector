<?php
namespace Bronevik\HotelsConnector\Element;

class SearchOrderCriterionGuest extends SearchOrderCriterion
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

