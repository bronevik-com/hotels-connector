<?php


namespace Bronevik\HotelsConnector\Element;

class EditServiceHourPrice extends OfferHourPrice
{
    /**
     * Доступен ли час для коррекции
     * Is the hour available for correction
     *
     * @var boolean
     */
    public $correctionAvailability;

    /**
     * @return bool
     */
    public function isCorrectionAvailability()
    {
        return $this->correctionAvailability;
    }

    /**
     * @param bool $correctionAvailability
     */
    public function setCorrectionAvailability($correctionAvailability)
    {
        $this->correctionAvailability = $correctionAvailability;
    }
}
