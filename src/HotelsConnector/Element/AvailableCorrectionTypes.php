<?php


namespace Bronevik\HotelsConnector\Element;

use Bronevik\HotelsConnector\Enum\CorrectionTypes;

class AvailableCorrectionTypes
{
    /**
     * Виды дополнительных услуг по которым нужна информация
     * Types of additional services for which information is needed
     *
     * @var string[]
     * @see CorrectionTypes
     */
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
    public function addCorrectionType($correctionType)
    {
        $this->correctionType[] = $correctionType;
    }
}
