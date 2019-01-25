<?php
namespace Bronevik\HotelsConnector\Element;

class BreakfastInfo
{
    /**
     * Название завтрака
     * The breakfast name
     * Type: xsd:string
     * 
     * @var string
     */
    public $name = null;

    /**
     * Стоимость
     * The breakfast price
     * Type: xsd:float
     * 
     * @var float
     */
    public $price = null;

    /**
     * Включен в стоимость проживания
     * True if breakfast included in offer price
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $included = null;

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
     * @param float $price 
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * 
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * 
     * @param boolean $included 
     */
    public function setIncluded($included)
    {
        $this->included = $included;
    }

    /**
     * 
     * @return boolean
     */
    public function getIncluded()
    {
        return $this->included;
    }
}

