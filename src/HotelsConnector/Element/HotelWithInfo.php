<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Описание номеров
 * The hotel room description
 */
class HotelWithInfo extends Hotel
{
    /**
     * @var HotelRoom[]
     */
    public $rooms = [];

    /**
     * @return bool
     */
    public function hasRooms()
    {
        return count($this->rooms) > 0;
    }

    /**
     * @return HotelRoom[]
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * @param HotelRoom $rooms
     */
    public function addRooms($rooms)
    {
        $this->rooms[] = $rooms;
    }
}
