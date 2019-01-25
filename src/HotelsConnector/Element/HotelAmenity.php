<?php
namespace Bronevik\HotelsConnector\Element;

/**
 * Услуги отеля
 * Hotel's amenities
 * 
 */
class HotelAmenity
{
    /**
     * Название услуги
     * The amenity name
     * Type: xsd:string
     * 
     * @var string
     */
    public $name = null;

    /**
     * Тип услуги
     * The amenity type
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

