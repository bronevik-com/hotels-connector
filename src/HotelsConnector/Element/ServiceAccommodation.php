<?php

namespace Bronevik\HotelsConnector\Element;

class ServiceAccommodation extends Service
{
    /**
     * Код предложения
     * The offer code
     *
     * @var string
     */
    public $offerCode;

    /**
     * ФИО гостей
     * The name of guests
     *
     * @var string[]
     */
    public $guests = [];

    /**
     * Комментарий к услуге
     * An information about service
     *
     * @var string
     */
    public $comment;

    /**
     * Цена продажи
     * The selling price
     *
     * @var float
     */
    public $sellingPrice;

    /**
     * Желаемое время заезда
     * The desired date of check-in
     *
     * @var int
     */
    public $checkinHour;

    /**
     * Желаемое время выезда
     * The desired date of check-out
     *
     * @var int
     */
    public $checkoutHour;

    /**
     * Список заказанных услуг питания
     * A list of offer's booked meals
     *
     * @var int[]
     */
    public $meals = [];

    /**
     * @return string
     */
    public function getOfferCode()
    {
        return $this->offerCode;
    }

    /**
     * @param string $offerCode
     */
    public function setOfferCode($offerCode)
    {
        $this->offerCode = $offerCode;
    }

    /**
     * @return bool
     */
    public function hasGuests()
    {
        return count($this->guests) > 0;
    }

    /**
     * @return string[]
     */
    public function getGuests()
    {
        return $this->guests;
    }

    /**
     * @param string $guests
     */
    public function addGuests($guests)
    {
        $this->guests[] = $guests;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return float
     */
    public function getSellingPrice()
    {
        return $this->sellingPrice;
    }

    /**
     * @param float $sellingPrice
     */
    public function setSellingPrice($sellingPrice)
    {
        $this->sellingPrice = $sellingPrice;
    }

    /**
     * @return int
     */
    public function getCheckinHour()
    {
        return $this->checkinHour;
    }

    /**
     * @param int $checkinHour
     */
    public function setCheckinHour($checkinHour)
    {
        $this->checkinHour = $checkinHour;
    }

    /**
     * @return int
     */
    public function getCheckoutHour()
    {
        return $this->checkoutHour;
    }

    /**
     * @param int $checkoutHour
     */
    public function setCheckoutHour($checkoutHour)
    {
        $this->checkoutHour = $checkoutHour;
    }

    /**
     * @return bool
     */
    public function hasMeals()
    {
        return count($this->meals) > 0;
    }

    /**
     * @return int[]
     */
    public function getMeals()
    {
        return $this->meals;
    }

    /**
     * @param int $meals
     */
    public function addMeals($meals)
    {
        $this->meals[] = $meals;
    }
}
