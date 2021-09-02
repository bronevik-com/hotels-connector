<?php


namespace Bronevik\HotelsConnector\Element;


use Bronevik\HotelsConnector\Enum\CorrectionTypes;

class AvailableCorrectionTypes
{
    public $correctionType = [];

    /**
     * @return array
     */
    public function getCorrectionType()
    {
        return $this->correctionType;
    }

    /**
     * @param string $correctionType
     *
     * @see CorrectionTypes
     */
    public function addAmenityType($correctionType) {
        $this->correctionType[] = $correctionType;
    }
}
