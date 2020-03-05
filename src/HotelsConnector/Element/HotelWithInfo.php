<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Описание номеров
 * The hotel room description
 */
class HotelWithInfo extends Hotel
{
    /**
     * Сертификат, подтверждающий звездность отеля.
     * Hotel's star certificate information.
     *
     * @var CategoryCertificate
     */
    public $categoryCertificate = null;

    /**
     * @var HotelRoom[]
     */
    public $rooms = [];

    public function __construct()
    {
        parent::__construct();
        $this->categoryCertificate = new CategoryCertificate();
    }

    /**
     * @param CategoryCertificate $categoryCertificate
     */
    public function setCategoryCertificate($categoryCertificate)
    {
        $this->categoryCertificate = $categoryCertificate;
    }

    /**
     * @return CategoryCertificate
     */
    public function getCategoryCertificate()
    {
        return $this->categoryCertificate;
    }

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
