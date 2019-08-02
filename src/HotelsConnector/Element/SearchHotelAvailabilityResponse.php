<?php

namespace Bronevik\HotelsConnector\Element;

class SearchHotelAvailabilityResponse extends BaseResponse
{
    /**
     * Отели с самым дешевым оффером.
     * Hotels with the cheapest offer.
     *
     * @var HotelsWithCheapestOffer
     */
    public $hotels;

    public function __construct()
    {
        $this->hotels = new HotelsWithCheapestOffer();
    }

    /**
     * @param HotelsWithCheapestOffer $hotels
     */
    public function setHotels($hotels)
    {
        $this->hotels = $hotels;
    }

    /**
     * @return HotelsWithCheapestOffer
     */
    public function getHotels()
    {
        return $this->hotels;
    }
}
