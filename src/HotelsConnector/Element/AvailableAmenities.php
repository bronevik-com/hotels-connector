<?php
namespace Bronevik\HotelsConnector\Element;

class AvailableAmenities
{
    /**
     * Type: tns:AvailableAmenity
     * 
     * @var \Bronevik\HotelsConnector\Element\AvailableAmenity[]
     */
    public $availableAmenity = [];

    /**
     * 
     * @return bool
     */
    public function hasAvailableAmenity()
    {
        return count($this->availableAmenity) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\AvailableAmenity[]
     */
    public function getAvailableAmenity()
    {
        return $this->availableAmenity;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\AvailableAmenity $availableAmenity 
     */
    public function addAvailableAmenity($availableAmenity)
    {
        $this->availableAmenity[] = $availableAmenity;
    }
}

