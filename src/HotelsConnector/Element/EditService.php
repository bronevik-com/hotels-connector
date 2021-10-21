<?php


namespace Bronevik\HotelsConnector\Element;

class EditService
{
    /**
     * Идентификатор услуги
     * Service ID
     *
     * @var int
     */
    public $serviceId;

    /**
     * Доступные даты для коррекции заезда и выезда
     * Available dates for check-in and check-out correction
     *
     * @var EditServiceArrivalDepartureDates
     */
    public $arrivalDepartureDates;

    /**
     * Информация о доступном питании.
     * Information about available food.
     *
     * @var EditServiceAvailableMeals
     */
    public $meals;

    /**
     * Цены и доступность РЗПВ.
     * EALD prices and availability.
     *
     * @var ClaimCheckinCheckoutPrices
     */
    public $checkinCheckoutPrices;

    /**
     * Информация о доступности коррекции
     * Correction availability information
     *
     * @var CorrectionAvailability
     */
    public $correctionAvailability;

    public function __construct()
    {
        $this->meals = new AvailableMeals();
    }

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
     * @return EditServiceAvailableMeals
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

    /**
     * @param EditServiceAvailableMeals $meals
     */
    public function setMeals($meals)
    {
        $this->meals = $meals;
    }

    /**
     * @param int $serviceId
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;
    }

    /**
     * @param EditServiceArrivalDepartureDates $arrivalDepartureDates
     */
    public function setArrivalDepartureDates($arrivalDepartureDates)
    {
        $this->arrivalDepartureDates = $arrivalDepartureDates;
    }

    /**
     * @param ClaimCheckinCheckoutPrices $checkinCheckoutPrices
     */
    public function setCheckinCheckoutPrices($checkinCheckoutPrices)
    {
        $this->checkinCheckoutPrices = $checkinCheckoutPrices;
    }

    /**
     * @param CorrectionAvailability $correctionAvailability
     */
    public function setCorrectionAvailability($correctionAvailability)
    {
        $this->correctionAvailability = $correctionAvailability;
    }
}
