<?php

namespace Bronevik\HotelsConnector\Element;

class Hotels
{
    /**
     * @var HotelWithOffers[]
     */
    public $hotel = [];

    /**
     * @return bool
     */
    public function hasHotel()
    {
        return count($this->hotel) > 0;
    }

    /**
     * @return HotelWithOffers[]
     */
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * @param HotelWithOffers $hotel
     */
    public function addHotel($hotel)
    {
        $this->hotel[] = $hotel;
    }
}
