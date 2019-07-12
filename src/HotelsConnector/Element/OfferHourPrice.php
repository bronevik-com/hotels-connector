<?php

namespace Bronevik\HotelsConnector\Element;

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
