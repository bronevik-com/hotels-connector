<?php


namespace Bronevik\HotelsConnector\Element;

class CorrectionAvailability
{
    /**
     * Доступное количество коррекций
     * Available number of corrections
     *
     * @var int
     */
    public $availableCorrectionNumber;

    /**
     * Доступна ли коррекция услуги
     * Is service correction available
     *
     * @var bool
     */
    public $isCorrectionAvailable;

    /**
     * Доступна ли коррекция питания
     * Is meals correction available
     *
     * @var boolean
     */
    public $meals;

    /**
     * Доступна ли коррекция часов заезда
     * Is the check-in time correction available
     *
     * @var boolean
     */
    public $checkinHour;

    /**
     * Доступна ли коррекция часов выезда
     * Is the check-out time correction available
     *
     * @var boolean
     */
    public $checkoutHour;

    /**
     * Доступна ли коррекция даты заезда
     * Is the check-in date correction available
     *
     * @var boolean
     */
    public $arrivalDate;

    /**
     * Доступна ли коррекция даты выезда
     * Is the departure date correction available
     *
     * @var boolean
     */
    public $departureDate;

    /**
     * Доступна ли коррекция свайп шкалы
     * Is the selling price correction available
     * @var boolean
     */
    public $sellingPrice;

    /**
     * Доступна ли коррекция комментария
     * Is the comment correction available
     *
     * @var boolean
     */
    public $comment;

    /**
     * Доступна ли коррекция гостей
     * Is guest correction available
     *
     * @var boolean
     */
    public $guests;

    /**
     * Доступна ли коррекция referenceId
     * Is referenceId correction available
     *
     * @var boolean
     */
    public $referenceId;

    /**
     * @param bool $isCorrectionAvailable
     */
    public function setIsCorrectionAvailable($isCorrectionAvailable)
    {
        $this->isCorrectionAvailable = $isCorrectionAvailable;
    }

    /**
     * @param bool $meals
     */
    public function setMeals($meals)
    {
        $this->meals = $meals;
    }

    /**
     * @param bool $checkinHour
     */
    public function setCheckinHour($checkinHour)
    {
        $this->checkinHour = $checkinHour;
    }

    /**
     * @param bool $checkoutHour
     */
    public function setCheckoutHour($checkoutHour)
    {
        $this->checkoutHour = $checkoutHour;
    }

    /**
     * @param bool $arrivalDate
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;
    }

    /**
     * @param bool $departureDate
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;
    }

    /**
     * @param bool $sellingPrice
     */
    public function setSellingPrice($sellingPrice)
    {
        $this->sellingPrice = $sellingPrice;
    }

    /**
     * @param bool $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @param bool $guests
     */
    public function setGuests($guests)
    {
        $this->guests = $guests;
    }

    /**
     * @param bool $referenceId
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;
    }

    /**
     * @return int
     */
    public function getAvailableCorrectionNumber()
    {
        return $this->availableCorrectionNumber;
    }

    /**
     * @return bool
     */
    public function getIsCorrectionAvailable()
    {
        return $this->isCorrectionAvailable;
    }

    /**
     * @return bool
     */
    public function getMeals()
    {
        return $this->meals;
    }

    /**
     * @return bool
     */
    public function getCheckinHour()
    {
        return $this->checkinHour;
    }

    /**
     * @return bool
     */
    public function getCheckoutHour()
    {
        return $this->checkoutHour;
    }

    /**
     * @return bool
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * @return bool
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * @return bool
     */
    public function getSellingPrice()
    {
        return $this->sellingPrice;
    }

    /**
     * @return bool
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return bool
     */
    public function getGuests()
    {
        return $this->guests;
    }

    /**
     * @return bool
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * @param int $availableCorrectionNumber
     */
    public function setAvailableCorrectionNumber($availableCorrectionNumber)
    {
        $this->availableCorrectionNumber = $availableCorrectionNumber;
    }
}
