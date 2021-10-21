<?php


namespace Bronevik\HotelsConnector\Element;

class HotelsWithInfo
{
    /**
     * @var HotelWithInfo[]
     */
    public $hotel = [];

    /**
     * @return HotelWithInfo[]
     */
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * @param HOtelWithInfo $hotel
     */
    public function addHotel($hotel)
    {
        $this->hotel[] = $hotel;
    }

    /**
     * @return bool
     */
    public function hasHotel()
    {
        return count($this->hotel) > 0;
    }
}
