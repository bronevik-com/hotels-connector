<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Ответ на запрос по поиску предложений
 * The search hotel offers response
 */
class SearchHotelOffersResponse extends BaseResponse
{
    /**
     * @var Hotels
     */
    public $hotels;

    public function __construct()
    {
        $this->hotels = new Hotels();
    }

    /**
     * @param Hotels $hotels
     */
    public function setHotels($hotels)
    {
        $this->hotels = $hotels;
    }

    /**
     * @return Hotels
     */
    public function getHotels()
    {
        return $this->hotels;
    }
}
