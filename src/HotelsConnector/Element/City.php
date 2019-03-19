<?php

namespace Bronevik\HotelsConnector\Element;

class City
{
    /**
     * Идентификатор города
     * The city id
     *
     * @var int
     */
    public $id;

    /**
     * Название города
     * The city name
     *
     * @var string
     */
    public $name;

    /**
     * Широта (географические координаты)
     * The latitude (geographic coordinate)
     *
     * @var string
     */
    public $latitude;

    /**
     * Долгота (географические координаты)
     * The longitude (geographic coordinate)
     *
     * @var string
     */
    public $longitude;

    /**
     * Идентификатор региона города
     * The city's region id
     *
     * @var int
     */
    public $regionId;

    /**
     * Название региона города
     * The city's region name
     *
     * @var string
     */
    public $regionName;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param string $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param int $regionId
     */
    public function setRegionId($regionId)
    {
        $this->regionId = $regionId;
    }

    /**
     * @return int
     */
    public function getRegionId()
    {
        return $this->regionId;
    }

    /**
     * @param string $regionName
     */
    public function setRegionName($regionName)
    {
        $this->regionName = $regionName;
    }

    /**
     * @return string
     */
    public function getRegionName()
    {
        return $this->regionName;
    }
}
