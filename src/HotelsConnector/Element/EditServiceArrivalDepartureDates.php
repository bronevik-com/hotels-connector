<?php


namespace Bronevik\HotelsConnector\Element;

class EditServiceArrivalDepartureDates
{
    /**
     * Доступные даты для коррекции заезда
     * Available dates for check-in correction
     *
     * @var EditServiceDate | null
     */
    public $arrivalDate;

    /**
     * Доступные даты для коррекции выезда
     * Available dates for departure correction
     *
     * @var EditServiceDate | null
     */
    public $departureDate;

    /**
     * @return EditServiceDate | null
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * @return EditServiceDate | null
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * @param EditServiceDate | null $departureDate
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;
    }

    /**
     * @param EditServiceDate | null $arrivalDate
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;
    }
}
