<?php

namespace Bronevik\HotelsConnector\Element;

class GetHotelInfoResponse extends BaseResponse
{
    /**
     * @var HotelWithInfo[]
     */
    public $hotels = [];

    /**
     * @return bool
     */
    public function hasHotels()
    {
        return count($this->hotels) > 0;
    }

    /**
     * @return HotelWithInfo[]
     */
    public function getHotels()
    {
        return $this->hotels;
    }

    /**
     * @param HotelWithInfo $hotels
     */
    public function addHotels($hotels)
    {
        $this->hotels[] = $hotels;
    }
}
