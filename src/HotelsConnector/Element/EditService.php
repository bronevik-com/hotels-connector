<?php


namespace Bronevik\HotelsConnector\Element;


class EditService
{
    /**
     * @var int | null
     */
    public $serviceId = null;

    /**
     * @var EditServiceArrivalDepartureDates | null
     */
    public $arrivalDepartureDates = null;

    /**
     * @var AvailableMeals | null
     */
    public $meals = null;

    /**
     * @var ClaimCheckinCheckoutPrices | null
     */
    public $checkinCheckoutPrices = null;

    /**
     * @var CorrectionAvailability | null
     */
    public $correctionAvailability = null;

    /**
     * @return int
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * @return EditServiceArrivalDepartureDates
     */
    public function getArrivalDepartureDates()
    {
        return $this->arrivalDepartureDates;
    }

    /**
     * @return AvailableMeals
     */
    public function getMeals()
    {
        return $this->meals;
    }

    /**
     * @return ClaimCheckinCheckoutPrices
     */
    public function getCheckinCheckoutPrices()
    {
        return $this->checkinCheckoutPrices;
    }

    /**
     * @return CorrectionAvailability|null
     */
    public function getCorrectionAvailability()
    {
        return $this->correctionAvailability;
    }
}
