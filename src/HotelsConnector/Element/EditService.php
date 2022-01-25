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
     * @var EditServiceArrivalDepartureDates | null
     */
    public $arrivalDepartureDates;

    /**
     * Информация о доступном питании.
     * Information about available food.
     *
     * @var EditServiceAvailableMeals | null
     */
    public $meals;

    /**
     * Цены и доступность РЗПВ.
     * EALD prices and availability.
     *
     * @var ClaimCheckinCheckoutPrices | null
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
     * @return EditServiceArrivalDepartureDates | null
     */
    public function getArrivalDepartureDates()
    {
        return $this->arrivalDepartureDates;
    }

    /**
     * @return EditServiceAvailableMeals | null
     */
    public function getMeals()
    {
        return $this->meals;
    }

    /**
     * @return ClaimCheckinCheckoutPrices | null
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
     * @param EditServiceAvailableMeals | null $meals
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
     * @param EditServiceArrivalDepartureDates | null $arrivalDepartureDates
     */
    public function setArrivalDepartureDates($arrivalDepartureDates)
    {
        $this->arrivalDepartureDates = $arrivalDepartureDates;
    }

    /**
     * @param ClaimCheckinCheckoutPrices | null $checkinCheckoutPrices
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
