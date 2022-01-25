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
     * @var CategoryCertificate | null
     */
    public $categoryCertificate = null;

    /**
     * @var HotelRooms
     */
    public $rooms;

    public function __construct()
    {
        parent::__construct();
        $this->categoryCertificate = new CategoryCertificate();
        $this->rooms               = new HotelRooms();
    }

    /**
     * @param CategoryCertificate | null $categoryCertificate
     */
    public function setCategoryCertificate($categoryCertificate)
    {
        $this->categoryCertificate = $categoryCertificate;
    }

    /**
     * @return CategoryCertificate | null
     */
    public function getCategoryCertificate()
    {
        return $this->categoryCertificate;
    }

    /**
     * @return HotelRooms
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * @param HotelRooms $rooms
     */
    public function setRooms($rooms)
    {
        $this->rooms = $rooms;
    }
}
