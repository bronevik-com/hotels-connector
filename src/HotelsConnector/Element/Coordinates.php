<?php

namespace Bronevik\HotelsConnector\Element;

class Coordinates
{
    /**
     * Широта.
     * Latitude.
     *
     * @var string
     */
    public $latitude;

    /**
     * Долгота.
     * Longitude.
     *
     * @var string
     */
    public $longitude;

    /**
     * @param float $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
}
