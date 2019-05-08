<?php

namespace Bronevik\HotelsConnector\Element;

class DailyPrice
{
    /**
     * Дата, на которую рассчитана цена
     * The date of stay
     *
     * @var string
     */
    public $date;

    /**
     * Стоимость номера
     * The price's detailing of accommodation per day
     *
     * @var ClientPriceDetails
     */
    public $rate;

    /**
     * Стоимость брони в отеле
     * The booking fee’s price detailing
     *
     * @var ClientPriceDetails
     */
    public $bookingFee;

    /**
     * Стоимость раннего заезда
     * The cost of early arrival
     *
     * @var ClientPriceDetails
     */
    public $earlyArrival;

    /**
     * Стоимость позднего выезда
     * The cost of last departure
     *
     * @var ClientPriceDetails
     */
    public $lateDeparture;

    /**
     * Стоимость платного питания
     * The cost of meal service
     *
     * @var DailyPriceMeals
     */
    public $meals;

    public function __construct()
    {
        $this->rate          = new ClientPriceDetails();
        $this->bookingFee    = new ClientPriceDetails();
        $this->earlyArrival  = new ClientPriceDetails();
        $this->lateDeparture = new ClientPriceDetails();
        $this->meals         = new DailyPriceMeals();
    }

    /**
     *
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param ClientPriceDetails $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    /**
     * @return ClientPriceDetails
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param ClientPriceDetails $bookingFee
     */
    public function setBookingFee($bookingFee)
    {
        $this->bookingFee = $bookingFee;
    }

    /**
     * @return ClientPriceDetails
     */
    public function getBookingFee()
    {
        return $this->bookingFee;
    }

    /**
     * @param ClientPriceDetails $earlyArrival
     */
    public function setEarlyArrival($earlyArrival)
    {
        $this->earlyArrival = $earlyArrival;
    }

    /**
     * @return ClientPriceDetails
     */
    public function getEarlyArrival()
    {
        return $this->earlyArrival;
    }

    /**
     * @param ClientPriceDetails $lateDeparture
     */
    public function setLateDeparture($lateDeparture)
    {
        $this->lateDeparture = $lateDeparture;
    }

    /**
     * @return ClientPriceDetails
     */
    public function getLateDeparture()
    {
        return $this->lateDeparture;
    }

    /**
     * @param DailyPriceMeals $meals
     */
    public function setMeals($meals)
    {
        $this->meals = $meals;
    }

    /**
     * @return DailyPriceMeals
     */
    public function getMeals()
    {
        return $this->meals;
    }
}
