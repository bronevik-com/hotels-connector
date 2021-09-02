<?php


namespace Bronevik\HotelsConnector\Element;


class UpdateService
{
    /**
     * @var int | null
     */
    public $referenceId = null;

    /**
     * @var int | null
     */
    public $checkinHour = null;

    /**
     * @var int | null
     */
    public $checkoutHour = null;

    /**
     * @var string | null
     */
    public $arrivalDate = null;

    /**
     * @var string | null
     */
    public $departureDate = null;

    /**
     * @var MealIds | null
     */
    public $addMeals = null;

    /**
     * @var MealIds | null
     */
    public $removeMeals = null;

    /**
     * @var int | null
     */
    public $sellingPrice = null;

    /**
     * @var string | null
     */
    public $comment = null;

    /**
     * @param int|null $referenceId
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;
    }

    /**
     * @param int|null $checkinHour
     */
    public function setCheckinHour($checkinHour)
    {
        $this->checkinHour = $checkinHour;
    }

    /**
     * @param int|null $checkoutHour
     */
    public function setCheckoutHour($checkoutHour)
    {
        $this->checkoutHour = $checkoutHour;
    }

    /**
     * @param string|null $arrivalDate
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;
    }

    /**
     * @param string|null $departureDate
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;
    }

    /**
     * @param MealIds|null $addMeals
     */
    public function setAddMeals($addMeals)
    {
        $this->addMeals = $addMeals;
    }

    /**
     * @param MealIds|null $removeMeals
     */
    public function setRemoveMeals($removeMeals)
    {
        $this->removeMeals = $removeMeals;
    }

    /**
     * @param int|null $sellingPrice
     */
    public function setSellingPrice($sellingPrice)
    {
        $this->sellingPrice = $sellingPrice;
    }

    /**
     * @param string|null $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

}
