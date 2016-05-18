<?php
namespace Bronevik\HotelsConnector\Element;

class GetHotelInfoResponse extends BaseResponse
{
    /**
     * Type: tns:HotelWithInfo
     * 
     * @var \Bronevik\HotelsConnector\Element\HotelWithInfo[]
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
     * @return \Bronevik\HotelsConnector\Element\HotelWithInfo[]
     */
    public function getHotels()
    {
        return $this->hotels;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\HotelWithInfo $hotels 
     */
    public function addHotels($hotels)
    {
        $this->hotels[] = $hotels;
    }
}

