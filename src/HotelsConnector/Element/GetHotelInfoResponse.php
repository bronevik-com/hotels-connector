<?php

namespace Bronevik\HotelsConnector\Element;

class GetHotelInfoResponse extends BaseResponse
{
    /**
     * @var HotelsWithInfo
     */
    public $hotels;

    /**
     * @return HotelsWithInfo
     */
    public function getHotels()
    {
        return $this->hotels;
    }

    /**
     * @param HotelsWithInfo $hotels
     */
    public function setHotels($hotels)
    {
        $this->hotels = $hotels;
    }
}
