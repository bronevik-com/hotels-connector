<?php

namespace Bronevik\HotelsConnector\Element;

class BreakfastInfo
{
    /**
     * Название завтрака
     * The breakfast name
     *
     * @var string
     */
    public $name;

    /**
     * Стоимость
     * The breakfast price
     *
     * @var float
     */
    public $price;

    /**
     * Включен в стоимость проживания
     * True if breakfast included in offer price
     *
     * @var boolean
     */
    public $included;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return boolean
     */
    public function getIncluded()
    {
        return $this->included;
    }

    /**
     * @param boolean $included
     */
    public function setIncluded($included)
    {
        $this->included = $included;
    }
}
