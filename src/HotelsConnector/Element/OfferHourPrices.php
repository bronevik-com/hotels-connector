<?php

namespace Bronevik\HotelsConnector\Element;

class OfferHourPrices
{
    /**
     * Массив с ценами по часам.
     * Array with prices by the hour.
     *
     * @var OfferHourPrice[]
     */
    public $hourPrice = [];

    /**
     * @return bool
     */
    public function hasHourPrice()
    {
        return count($this->hourPrice) > 0;
    }

    /**
     * @return OfferHourPrice[]
     */
    public function getHourPrice()
    {
        return $this->hourPrice;
    }

    /**
     * @param OfferHourPrice $hourPrice
     */
    public function addHourPrice($hourPrice)
    {
        $this->hourPrice[] = $hourPrice;
    }
}
