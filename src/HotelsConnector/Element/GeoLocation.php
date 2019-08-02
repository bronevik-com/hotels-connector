<?php

namespace Bronevik\HotelsConnector\Element;

class GeoLocation
{
    /**
     * Широта.
     * Latitude.
     *
     * @var float
     */
    public $latitude;

    /**
     * Долгота.
     * Longitude.
     *
     * @var float
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
