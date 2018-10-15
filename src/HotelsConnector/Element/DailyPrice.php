<?php

namespace Bronevik\HotelsConnector\Element;

class DailyPrice
{
    /**
     * Type: xsd:date
     *
     * @var string
     */
    public $date = null;

    /**
     * Type: xsd:float
     * 
     * @var float
     * @deprecated
     */
    public $price;

    /**
     * @var ClientPriceDetails|null
     */
    public $rate;

    /**
     * @var ClientPriceDetails|null
     */
    public $bookingFee;

    /**
     * @var ClientPriceDetails|null
     */
    public $earlyArrival;

    /**
     * @var ClientPriceDetails|null
     */
    public $lateDeparture;

    /**
     * @var DailyPriceMeals|null
     */
    public $meals;

    public function __construct()
    {
        $this->meals = new DailyPriceMeals();
    }

    /**
     *
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     *
     * @param float $price
     * @deprecated
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     *
     * @return float
     * @deprecated
     */
    public function getPrice()
    {
        return $this->price;
    }
}

