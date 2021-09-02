<?php


namespace Bronevik\HotelsConnector\Element;


class CorrectionAvailability
{
    /**
     * @var int | null
     */
    public $availableCorrectionNumber = null;

    /**
     * @var int | null
     */
    public $isCorrectionAvailable = null;

    /**
     * @var boolean | null
     */
    public $meals = null;

    /**
     * @var boolean | null
     */
    public $checkinHour = null;

    /**
     * @var boolean | null
     */
    public $checkoutHour = null;

    /**
     * @var boolean | null
     */
    public $arrivalDate = null;

    /**
     * @var boolean | null
     */
    public $departureDate = null;

    /**
     * @var boolean | null
     */
    public $sellingPrice = null;

    /**
     * @var boolean | null
     */
    public $comment = null;

    /**
     * @var boolean | null
     */
    public $guests = null;

    /**
     * @var boolean | null
     */
    public $referenceId = null;

    /**
     * @return int|null
     */
    public function getAvailableCorrectionNumber()
    {
        return $this->availableCorrectionNumber;
    }

    /**
     * @return int|null
     */
    public function getIsCorrectionAvailable()
    {
        return $this->isCorrectionAvailable;
    }

    /**
     * @return bool|null
     */
    public function getMeals()
    {
        return $this->meals;
    }

    /**
     * @return bool|null
     */
    public function getCheckinHour()
    {
        return $this->checkinHour;
    }

    /**
     * @return bool|null
     */
    public function getCheckoutHour()
    {
        return $this->checkoutHour;
    }

    /**
     * @return bool|null
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * @return bool|null
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * @return bool|null
     */
    public function getSellingPrice()
    {
        return $this->sellingPrice;
    }

    /**
     * @return bool|null
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return bool|null
     */
    public function getGuests()
    {
        return $this->guests;
    }

    /**
     * @return bool|null
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }
}
