<?php

namespace Bronevik\HotelsConnector\Element;

class AvailableAmenities
{
    /**
     * @var AvailableAmenity[]
     */
    public $availableAmenity = [];

    /**
     * @return bool
     */
    public function hasAvailableAmenity()
    {
        return count($this->availableAmenity) > 0;
    }

    /**
     * @return AvailableAmenity[]
     */
    public function getAvailableAmenity()
    {
        return $this->availableAmenity;
    }

    /**
     * @param AvailableAmenity $availableAmenity
     */
    public function addAvailableAmenity($availableAmenity)
    {
        $this->availableAmenity[] = $availableAmenity;
    }
}
