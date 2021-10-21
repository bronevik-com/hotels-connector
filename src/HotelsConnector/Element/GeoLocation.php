<?php

namespace Bronevik\HotelsConnector\Element;

class GeoLocation
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
     * Радиус поиска (км).
     * Search radius (km).
     *
     * @var float
     */
    public $radius;

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
     * @param float $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return float
     */
    public function getRadius()
    {
        return $this->radius;
    }
}
