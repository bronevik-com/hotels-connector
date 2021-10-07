<?php


namespace Bronevik\HotelsConnector\Element;

class UpdateService
{
    /**
     * Номер услуги в системе клиента
     * Service number in the client's system
     *
     * @var int
     */
    public $referenceId;

    /**
     * Час заезда
     * Check-in hour
     *
     * @var int
     */
    public $checkinHour;

    /**
     * Час выезда
     * Departure hour
     *
     * @var int
     */
    public $checkoutHour;

    /**
     * Дата заезда
     * Arrival date
     *
     * @var string
     */
    public $arrivalDate;

    /**
     * Дата выезда
     * date of departure
     *
     * @var string
     */
    public $departureDate;

    /**
     * Услуги питания которые нужно добавить
     * Meals services to add
     *
     * @var MealIds
     */
    public $addMeals;

    /**
     * Услуги питания которые нужно удалить
     * Meals services to remove
     *
     * @var MealIds
     */
    public $removeMeals;

    /**
     * Коррекция свайп шкалы
     * Swipe Scale Correction
     *
     * @var int
     */
    public $sellingPrice;

    /**
     * Коррекция комментария
     * Correction of comments
     *
     * @var string
     */
    public $comment;

    public function __construct()
    {
        $this->addMeals    = new MealIds();
        $this->removeMeals = new MealIds();
    }


    /**
     * @return int
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * @return int
     */
    public function getCheckinHour()
    {
        return $this->checkinHour;
    }

    /**
     * @return int
     */
    public function getCheckoutHour()
    {
        return $this->checkoutHour;
    }

    /**
     * @return string
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * @return string
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * @return MealIds
     */
    public function getAddMeals()
    {
        return $this->addMeals;
    }

    /**
     * @return MealIds
     */
    public function getRemoveMeals()
    {
        return $this->removeMeals;
    }

    /**
     * @return int
     */
    public function getSellingPrice()
    {
        return $this->sellingPrice;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param int $referenceId
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;
    }

    /**
     * @param int $checkinHour
     */
    public function setCheckinHour($checkinHour)
    {
        $this->checkinHour = $checkinHour;
    }

    /**
     * @param int $checkoutHour
     */
    public function setCheckoutHour($checkoutHour)
    {
        $this->checkoutHour = $checkoutHour;
    }

    /**
     * @param string $arrivalDate
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;
    }

    /**
     * @param string $departureDate
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;
    }

    /**
     * @param MealIds $addMeals
     */
    public function setAddMeals($addMeals)
    {
        $this->addMeals = $addMeals;
    }

    /**
     * @param MealIds $removeMeals
     */
    public function setRemoveMeals($removeMeals)
    {
        $this->removeMeals = $removeMeals;
    }

    /**
     * @param int $sellingPrice
     */
    public function setSellingPrice($sellingPrice)
    {
        $this->sellingPrice = $sellingPrice;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }
}
