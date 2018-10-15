<?php
namespace Bronevik\HotelsConnector\Element;

class DailyPrices
{
    /**
     * Type: tns:DailyPrice
     * 
     * @var DailyPrice[]
     */
    public $prices = [];

    /**
     * 
     * @return bool
     */
    public function hasPrices()
    {
        return count($this->prices) > 0;
    }

    /**
     * 
     * @return DailyPrice[]
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * 
     * @param DailyPrice $prices
     */
    public function addPrices($prices)
    {
        $this->prices[] = $prices;
    }
}

