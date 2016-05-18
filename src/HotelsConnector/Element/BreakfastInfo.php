<?php
namespace Bronevik\HotelsConnector\Element;

class BreakfastInfo
{
    /**
     * Название завтрака
     * Type: xsd:string
     * 
     * @var string
     */
    public $name = null;

    /**
     * Стоимость
     * Type: xsd:string
     * 
     * @var string
     */
    public $price = null;

    /**
     * Включен в стоимость проживания
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
     * @param string $price 
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * 
     * @return string
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

