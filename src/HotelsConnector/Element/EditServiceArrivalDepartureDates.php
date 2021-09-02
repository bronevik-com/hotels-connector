<?php


namespace Bronevik\HotelsConnector\Element;


class EditServiceArrivalDepartureDates
{
    /**
     * @var EditServiceDate | null
     */
    public $arrivalDate = null;

    /**
     * @var EditServiceDate | null
     */
    public $departureDate = null;

    /**
     * @return EditServiceDate|null
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * @return EditServiceDate|null
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

}
