<?php


namespace Bronevik\HotelsConnector\Element;

class Amenities
{
    /**
     * @var Amenity[]
     */
    public $amenity = [];

    /**
     * @return Amenity[]
     */
    public function getAmenity()
    {
        return $this->amenity;
    }

    /**
     * @param Amenity[] $amenity
     */
    public function setAmenity($amenity)
    {
        $this->amenity = $amenity;
    }

    /**
     * @param Amenity $amenity
     */
    public function addAmenity($amenity)
    {
        $this->amenity[] = $amenity;
    }

    /**
     * @return bool
     */
    public function hasAmenity()
    {
        return count($this->amenity) > 0;
    }
}
