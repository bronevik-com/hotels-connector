<?php

namespace Bronevik\HotelsConnector\Element;

class AvailableAmenity
{
    /**
     * Идентификатор дополнительной услуги
     * The amenity id
     *
     * @var int
     */
    public $id;

    /**
     * Стоимость доп. услуги
     * The amenity price
     *
     * @var float
     */
    public $price;

    /**
     * Включена ли услуга во все предложения отеля
     * Whether the amenity is included in all properties offers
     *
     * @var boolean
     */
    public $included;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param boolean $included
     */
    public function setIncluded($included)
    {
        $this->included = $included;
    }

    /**
     * @return boolean
     */
    public function getIncluded()
    {
        return $this->included;
    }
}
