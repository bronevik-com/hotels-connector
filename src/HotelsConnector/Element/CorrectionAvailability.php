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
     * @var bool | null
     */
    public $isCorrectionAvailable;

    /**
     * Доступна ли коррекция питания
     * Is meals correction available
     *
     * @var boolean | null
     */
    public $meals;

    /**
     * Доступна ли коррекция часов заезда
     * Is the check-in time correction available
     *
     * @var boolean | null
     */
    public $checkinHour;

    /**
     * Доступна ли коррекция часов выезда
     * Is the check-out time correction available
     *
     * @var boolean | null
     */
    public $checkoutHour;

    /**
     * Доступна ли коррекция даты заезда
     * Is the check-in date correction available
     *
     * @var boolean | null
     */
    public $arrivalDate;

    /**
     * Доступна ли коррекция даты выезда
     * Is the departure date correction available
     *
     * @var boolean | null
     */
    public $departureDate;

    /**
     * Доступна ли коррекция свайп шкалы
     * Is the selling price correction available
     * @var boolean | null
     */
    public $sellingPrice;

    /**
     * Доступна ли коррекция комментария
     * Is the comment correction available
     *
     * @var boolean | null
     */
    public $comment;

    /**
     * Доступна ли коррекция гостей
     * Is guest correction available
     *
     * @var boolean | null
     */
    public $guests;

    /**
     * Доступна ли коррекция referenceId
     * Is referenceId correction available
     *
     * @var boolean | null
     */
    public $referenceId;

    /**
     * @param bool | null $isCorrectionAvailable
     */
    public function setIsCorrectionAvailable($isCorrectionAvailable)
    {
        $this->isCorrectionAvailable = $isCorrectionAvailable;
    }

    /**
     * @param bool | null $meals
     */
    public function setMeals($meals)
    {
        $this->meals = $meals;
    }

    /**
     * @param bool | null $checkinHour
     */
    public function setCheckinHour($checkinHour)
    {
        $this->checkinHour = $checkinHour;
    }

    /**
     * @param bool | null $checkoutHour
     */
    public function setCheckoutHour($checkoutHour)
    {
        $this->checkoutHour = $checkoutHour;
    }

    /**
     * @param bool | null $arrivalDate
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;
    }

    /**
     * @param bool | null $departureDate
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;
    }

    /**
     * @param bool | null $sellingPrice
     */
    public function setSellingPrice($sellingPrice)
    {
        $this->sellingPrice = $sellingPrice;
    }

    /**
     * @param bool | null $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @param bool | null $guests
     */
    public function setGuests($guests)
    {
        $this->guests = $guests;
    }

    /**
     * @param bool | null $referenceId
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
     * @return bool | null
     */
    public function getIsCorrectionAvailable()
    {
        return $this->isCorrectionAvailable;
    }

    /**
     * @return bool | null
     */
    public function getMeals()
    {
        return $this->meals;
    }

    /**
     * @return bool | null
     */
    public function getCheckinHour()
    {
        return $this->checkinHour;
    }

    /**
     * @return bool | null
     */
    public function getCheckoutHour()
    {
        return $this->checkoutHour;
    }

    /**
     * @return bool | null
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * @return bool | null
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * @return bool | null
     */
    public function getSellingPrice()
    {
        return $this->sellingPrice;
    }

    /**
     * @return bool | null
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return bool | null
     */
    public function getGuests()
    {
        return $this->guests;
    }

    /**
     * @return bool | null
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
