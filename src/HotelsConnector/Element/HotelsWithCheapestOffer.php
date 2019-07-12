<?php

namespace Bronevik\HotelsConnector\Element;

class HotelsWithCheapestOffer
{
    /**
     * Отель с самым дешевым оффером.
     * Hotel with the cheapest offer.
     *
     * @var HotelWithCheapestOffer[]
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
     * @return HotelWithCheapestOffer[]
     */
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * @param HotelWithCheapestOffer $hotel
     */
    public function addHotel($hotel)
    {
        $this->hotel[] = $hotel;
    }
}
