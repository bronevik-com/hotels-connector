<?php

namespace Bronevik\HotelsConnector\Element;

class GetAmenitiesResponse extends BaseResponse
{
    /**
     * Дополнительны услуги
     * Additional services
     *
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
