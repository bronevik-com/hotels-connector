<?php


namespace Bronevik\HotelsConnector\Element;

class EditServiceHourPrice extends OfferHourPrice
{
    /**
     * Доступен ли час для коррекции
     * Is the hour available for correction
     *
     * @var boolean | null
     */
    public $correctionAvailability;

    /**
     * @return bool | null
     */
    public function isCorrectionAvailability()
    {
        return $this->correctionAvailability;
    }

    /**
     * @param bool | null $correctionAvailability
     */
    public function setCorrectionAvailability($correctionAvailability)
    {
        $this->correctionAvailability = $correctionAvailability;
    }
}
