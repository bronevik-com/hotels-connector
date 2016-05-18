<?php
namespace Bronevik\HotelsConnector\Element;

class HotelAmenity
{
    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $name = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $type = null;

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

    /**
     * 
     * @param string $type 
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * 
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}

