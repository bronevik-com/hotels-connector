<?php

namespace Bronevik\HotelsConnector\Element;

class GetAmenitiesResponse extends BaseResponse
{
    /**
     * @var Amenity[]
     */
    public $amenities = [];

    /**
     * @return bool
     */
    public function hasAmenities()
    {
        return count($this->amenities) > 0;
    }

    /**
     * @return Amenity[]
     */
    public function getAmenities()
    {
        return $this->amenities;
    }

    /**
     * @param Amenity $amenities
     */
    public function addAmenities($amenities)
    {
        $this->amenities[] = $amenities;
    }
}
