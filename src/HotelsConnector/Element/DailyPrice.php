<?php
namespace Bronevik\HotelsConnector\Element;

class DailyPrice
{
    /**
     * Type: xsd:date
     * 
     * @var date
     */
    public $date = null;

    /**
     * Type: xsd:float
     * 
     * @var float
     */
    public $price = null;

    /**
     * 
     * @param date $date 
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * 
     * @return date
     */
    public function getDate()
    {
        return $this->date;
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
}

