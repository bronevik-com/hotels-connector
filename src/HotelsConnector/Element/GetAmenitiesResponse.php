<?php

namespace Bronevik\HotelsConnector\Element;

class GetAmenitiesResponse extends BaseResponse
{
    /**
     * @var Amenities
     */
    public $amenities;

    /**
     * @return Amenities
     */
    public function getAmenities()
    {
        return $this->amenities;
    }

    /**
     * @param Amenities $amenities
     */
    public function setAmenities($amenities)
    {
        $this->amenities = $amenities;
    }
}
