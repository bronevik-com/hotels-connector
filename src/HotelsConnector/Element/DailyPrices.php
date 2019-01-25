<?php
namespace Bronevik\HotelsConnector\Element;

class DailyPrices
{
    /**
     * Детализация стоимости
     * The detailed daily price
     * Type: tns:DailyPrice
     * 
     * @var \Bronevik\HotelsConnector\Element\DailyPrice[]
     */
    public $dailyPrice = [];

    /**
     * 
     * @return bool
     */
    public function hasDailyPrice()
    {
        return count($this->dailyPrice) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\DailyPrice[]
     */
    public function getDailyPrice()
    {
        return $this->dailyPrice;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\DailyPrice $dailyPrice 
     */
    public function addDailyPrice($dailyPrice)
    {
        $this->dailyPrice[] = $dailyPrice;
    }
}

