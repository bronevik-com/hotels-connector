<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Услуги отеля
 * Hotel's amenities
 */
class HotelAmenity
{
    /**
     * Название услуги
     * The amenity name
     *
     * @var string
     */
    public $name;

    /**
     * Тип услуги
     * The amenity type
     *
     * @var string
     */
    public $type;

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
