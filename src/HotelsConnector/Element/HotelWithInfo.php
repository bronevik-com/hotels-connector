<?php
namespace Bronevik\HotelsConnector\Element;

/**
 * Описание номеров
 * The hotel room description
 * 
 */
class HotelWithInfo extends Hotel
{
    /**
     * Type: tns:HotelRoom
     * 
     * @var \Bronevik\HotelsConnector\Element\HotelRoom[]
     */
    public $rooms = [];

    /**
     * 
     * @return bool
     */
    public function hasRooms()
    {
        return count($this->rooms) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\HotelRoom[]
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\HotelRoom $rooms 
     */
    public function addRooms($rooms)
    {
        $this->rooms[] = $rooms;
    }
}

