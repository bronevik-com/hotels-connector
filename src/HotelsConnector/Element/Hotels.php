<?php
namespace Bronevik\HotelsConnector\Element;

class Hotels
{
    /**
     * Type: tns:HotelWithOffers
     * 
     * @var \Bronevik\HotelsConnector\Element\HotelWithOffers[]
     */
    public $hotel = [];

    /**
     * 
     * @return bool
     */
    public function hasHotel()
    {
        return count($this->hotel) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\HotelWithOffers[]
     */
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\HotelWithOffers $hotel 
     */
    public function addHotel($hotel)
    {
        $this->hotel[] = $hotel;
    }
}

