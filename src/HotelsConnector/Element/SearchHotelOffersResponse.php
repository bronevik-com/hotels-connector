<?php
namespace Bronevik\HotelsConnector\Element;

class SearchHotelOffersResponse extends BaseResponse
{
    /**
     * Type: tns:HotelWithOffers
     * 
     * @var \Bronevik\HotelsConnector\Element\HotelWithOffers[]
     */
    public $hotels = [];

    /**
     * 
     * @return bool
     */
    public function hasHotels()
    {
        return count($this->hotels) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\HotelWithOffers[]
     */
    public function getHotels()
    {
        return $this->hotels;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\HotelWithOffers $hotels 
     */
    public function addHotels($hotels)
    {
        $this->hotels[] = $hotels;
    }
}

