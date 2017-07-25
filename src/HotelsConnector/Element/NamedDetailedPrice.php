<?php
namespace Bronevik\HotelsConnector\Element;

class NamedDetailedPrice extends DetailedPrice
{
    /**
     * Наименование цены
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

