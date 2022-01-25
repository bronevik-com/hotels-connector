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
     * @var float | null
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
     * Валюта
     * Currency
     *
     * @var string | null
     */
    public $currency;

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
     * @param float | null $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return float | null
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

    /**
     * @return string | null
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string | null $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }
}
