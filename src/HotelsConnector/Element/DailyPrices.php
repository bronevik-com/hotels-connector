<?php

namespace Bronevik\HotelsConnector\Element;

class DailyPrices
{
    /**
     * Детализация стоимости
     * The detailed daily price
     *
     * @var DailyPrice[]
     */
    public $dailyPrice = [];

    /**
     * @return bool
     */
    public function hasDailyPrice()
    {
        return count($this->dailyPrice) > 0;
    }

    /**
     * @return DailyPrice[]
     */
    public function getDailyPrice()
    {
        return $this->dailyPrice;
    }

    /**
     * @param DailyPrice $dailyPrice
     */
    public function addDailyPrice($dailyPrice)
    {
        $this->dailyPrice[] = $dailyPrice;
    }
}
