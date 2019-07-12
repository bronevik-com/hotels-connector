<?php

namespace Bronevik\HotelsConnector\Element;

class HotelGeo
{
    /**
     * Идентификатор города.
     * City ID.
     *
     * @var int
     */
    public $cityId;

    /**
     * Название города.
     * City name.
     *
     * @var string
     */
    public $cityName;

    /**
     * Адрес отеля.
     * Hotel address.
     *
     * @var string
     */
    public $address;

    /**
     * Расстояние до центра города.
     * The distance to the city center.
     *
     * @var float
     */
    public $distanceToCenter;

    /**
     * Координаты отеля.
     * Coordinates of the hotel.
     *
     * @var Coordinates
     */
    public $coordinates;

    public function __construct()
    {
        $this->coordinates = new Coordinates();
    }

    /**
     * @param int $cityId
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
    }

    /**
     * @return int
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param string $cityName
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
    }

    /**
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param float $distanceToCenter
     */
    public function setDistanceToCenter($distanceToCenter)
    {
        $this->distanceToCenter = $distanceToCenter;
    }

    /**
     * @return float
     */
    public function getDistanceToCenter()
    {
        return $this->distanceToCenter;
    }

    /**
     * @param Coordinates $coordinates
     */
    public function setCoordinates($coordinates)
    {
        $this->coordinates = $coordinates;
    }

    /**
     * @return Coordinates
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }
}
