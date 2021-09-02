<?php


namespace Bronevik\HotelsConnector\Element;

class HotelRooms
{
    /**
     * @var HotelRoom[]
     */
    public $room = [];

    /**
     * @return HotelRoom[]
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * @param HotelRoom[] $room
     */
    public function setRoom($room)
    {
        $this->room = $room;
    }

    /**
     * @param HotelRoom $room
     */
    public function addRoom($room)
    {
        $this->room[] = $room;
    }

    public function hasRoom()
    {
        return count($this->room) > 0;
    }
}
