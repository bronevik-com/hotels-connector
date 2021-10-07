<?php

namespace Bronevik\HotelsConnector\Element;

use Bronevik\HotelsConnector\Enum\AvailabilityCodes;

class OfferHourPrice
{
    /**
     * Час.
     * Hour.
     *
     * @var int
     */
    public $hour;

    /**
     * Код доступности.
     * Availability Code.
     *
     * @var int
     * @see AvailabilityCodes
     */
    public $availabilityCode;

    /**
     * Детализация часа.
     * Hour detail.
     *
     * @var PriceDetails
     */
    public $priceDetails;

    /**
     * Доступен ли час для коррекции
     * Is the hour available for correction
     *
     * @var boolean
     */
    public $correctionAvailability;

    /**
     * @param int $hour
     */
    public function setHour($hour)
    {
        $this->hour = $hour;
    }

    /**
     * @return int
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * @param int $availabilityCode
     */
    public function setAvailabilityCode($availabilityCode)
    {
        $this->availabilityCode = $availabilityCode;
    }

    /**
     * @return int
     */
    public function getAvailabilityCode()
    {
        return $this->availabilityCode;
    }

    /**
     * @param PriceDetails $priceDetails
     */
    public function setPriceDetails($priceDetails)
    {
        $this->priceDetails = $priceDetails;
    }

    /**
     * @return PriceDetails
     */
    public function getPriceDetails()
    {
        return $this->priceDetails;
    }
}
