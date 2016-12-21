<?php
namespace Bronevik\HotelsConnector\Element;

class GetAmenitiesResponse extends BaseResponse
{
    /**
     * Type: tns:Amenity
     * 
     * @var \Bronevik\HotelsConnector\Element\Amenity[]
     */
    public $amenities = [];

    /**
     * 
     * @return bool
     */
    public function hasAmenities()
    {
        return count($this->amenities) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\Amenity[]
     */
    public function getAmenities()
    {
        return $this->amenities;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\Amenity $amenities 
     */
    public function addAmenities($amenities)
    {
        $this->amenities[] = $amenities;
    }
}

