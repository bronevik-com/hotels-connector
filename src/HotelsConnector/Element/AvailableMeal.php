<?php
namespace Bronevik\HotelsConnector\Element;

class AvailableMeal
{
    /**
     * Идентификатор услуги питания
     * The meal service id
     * Type: xsd:int
     * 
     * @var int
     */
    public $id = null;

    /**
     * Стоимость услуги питания
     * The meal service cost
     * Type: xsd:float
     * 
     * @var float
     */
    public $price = null;

    /**
     * Включена ли услуга в предложение
     * Whether the service is included in the offer
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $included = null;

    /**
     * 
     * @param int $id 
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * 
     * @return int
     */
    public function getId()
    {
        return $this->id;
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

