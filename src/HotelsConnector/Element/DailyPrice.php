<?php
namespace Bronevik\HotelsConnector\Element;

class DailyPrice
{
    /**
     * Дата, на которую рассчитана цена
     * The date of stay
     * Type: xsd:date
     * 
     * @var date
     */
    public $date = null;

    /**
     * Стоимость номера
     * The price's detailing of accommodation per day
     * Type: tns:ClientPriceDetails
     * 
     * @var \Bronevik\HotelsConnector\Element\ClientPriceDetails
     */
    public $rate = null;

    /**
     * Стоимость брони в отеле
     * The booking fee’s price detailing
     * Type: tns:ClientPriceDetails
     * 
     * @var \Bronevik\HotelsConnector\Element\ClientPriceDetails
     */
    public $bookingFee = null;

    /**
     * Стоимость раннего заезда
     * The cost of early arrival
     * Type: tns:ClientPriceDetails
     * 
     * @var \Bronevik\HotelsConnector\Element\ClientPriceDetails
     */
    public $earlyArrival = null;

    /**
     * Стоимость позднего выезда
     * The cost of last departure
     * Type: tns:ClientPriceDetails
     * 
     * @var \Bronevik\HotelsConnector\Element\ClientPriceDetails
     */
    public $lateDeparture = null;

    /**
     * Стоимость платного питания
     * The cost of meal service
     * Type: tns:DailyPriceMeals
     * 
     * @var \Bronevik\HotelsConnector\Element\DailyPriceMeals
     */
    public $meals = null;

    /**
     * 
     */
    public function __construct()
    {
        $this->rate = new \Bronevik\HotelsConnector\Element\ClientPriceDetails;
        $this->bookingFee = new \Bronevik\HotelsConnector\Element\ClientPriceDetails;
        $this->earlyArrival = new \Bronevik\HotelsConnector\Element\ClientPriceDetails;
        $this->lateDeparture = new \Bronevik\HotelsConnector\Element\ClientPriceDetails;
        $this->meals = new \Bronevik\HotelsConnector\Element\DailyPriceMeals;
    }

    /**
     * 
     * @param date $date 
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * 
     * @return date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\ClientPriceDetails $rate 
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\ClientPriceDetails
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\ClientPriceDetails $bookingFee 
     */
    public function setBookingFee($bookingFee)
    {
        $this->bookingFee = $bookingFee;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\ClientPriceDetails
     */
    public function getBookingFee()
    {
        return $this->bookingFee;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\ClientPriceDetails $earlyArrival 
     */
    public function setEarlyArrival($earlyArrival)
    {
        $this->earlyArrival = $earlyArrival;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\ClientPriceDetails
     */
    public function getEarlyArrival()
    {
        return $this->earlyArrival;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\ClientPriceDetails $lateDeparture 
     */
    public function setLateDeparture($lateDeparture)
    {
        $this->lateDeparture = $lateDeparture;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\ClientPriceDetails
     */
    public function getLateDeparture()
    {
        return $this->lateDeparture;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\DailyPriceMeals $meals 
     */
    public function setMeals($meals)
    {
        $this->meals = $meals;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\DailyPriceMeals
     */
    public function getMeals()
    {
        return $this->meals;
    }
}

