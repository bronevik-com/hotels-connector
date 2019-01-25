<?php
namespace Bronevik\HotelsConnector\Element;

class ServiceAccommodation extends Service
{
    /**
     * Код предложения
     * The offer code
     * Type: xsd:string
     * 
     * @var string
     */
    public $offerCode = null;

    /**
     * ФИО гостей
     * The name of guests
     * Type: xsd:string
     * 
     * @var string[]
     */
    public $guests = [];

    /**
     * Комментарий к услуге
     * An information about service
     * Type: xsd:string
     * 
     * @var string
     */
    public $comment = null;

    /**
     * Цена продажи
     * The selling price
     * Type: xsd:float
     * 
     * @var float
     */
    public $sellingPrice = null;

    /**
     * Желаемое время заезда
     * The desired date of check-in
     * Type: xsd:int
     * 
     * @var int
     */
    public $checkinHour = null;

    /**
     * Желаемое время выезда
     * The desired date of check-out
     * Type: xsd:int
     * 
     * @var int
     */
    public $checkoutHour = null;

    /**
     * Список заказанных услуг питания
     * A list of offer's booked meals
     * Type: xsd:int
     * 
     * @var int[]
     */
    public $meals = [];

    /**
     * 
     * @param string $offerCode 
     */
    public function setOfferCode($offerCode)
    {
        $this->offerCode = $offerCode;
    }

    /**
     * 
     * @return string
     */
    public function getOfferCode()
    {
        return $this->offerCode;
    }

    /**
     * 
     * @return bool
     */
    public function hasGuests()
    {
        return count($this->guests) > 0;
    }

    /**
     * 
     * @return string[]
     */
    public function getGuests()
    {
        return $this->guests;
    }

    /**
     * 
     * @param string $guests 
     */
    public function addGuests($guests)
    {
        $this->guests[] = $guests;
    }

    /**
     * 
     * @param string $comment 
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * 
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * 
     * @param float $sellingPrice 
     */
    public function setSellingPrice($sellingPrice)
    {
        $this->sellingPrice = $sellingPrice;
    }

    /**
     * 
     * @return float
     */
    public function getSellingPrice()
    {
        return $this->sellingPrice;
    }

    /**
     * 
     * @param int $checkinHour 
     */
    public function setCheckinHour($checkinHour)
    {
        $this->checkinHour = $checkinHour;
    }

    /**
     * 
     * @return int
     */
    public function getCheckinHour()
    {
        return $this->checkinHour;
    }

    /**
     * 
     * @param int $checkoutHour 
     */
    public function setCheckoutHour($checkoutHour)
    {
        $this->checkoutHour = $checkoutHour;
    }

    /**
     * 
     * @return int
     */
    public function getCheckoutHour()
    {
        return $this->checkoutHour;
    }

    /**
     * 
     * @return bool
     */
    public function hasMeals()
    {
        return count($this->meals) > 0;
    }

    /**
     * 
     * @return int[]
     */
    public function getMeals()
    {
        return $this->meals;
    }

    /**
     * 
     * @param int $meals 
     */
    public function addMeals($meals)
    {
        $this->meals[] = $meals;
    }
}

