<?php
namespace Bronevik\HotelsConnector\Element;

class HotelOffer
{
    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $code = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $name = null;

    /**
     * Type: xsd:float
     * 
     * @var float
     */
    public $price = null;

    /**
     * Type: tns:Currency
     * 
     * @var string
     */
    public $currency = null;

    /**
     * Type: xsd:float
     * 
     * @var float
     */
    public $commission = null;

    /**
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $immediateConfirmation = null;

    /**
     * Type: xsd:int
     * 
     * @var int
     */
    public $freeRooms = null;

    /**
     * Type: tns:HotelOfferCancellationPolicy
     * 
     * @var \Bronevik\HotelsConnector\Element\HotelOfferCancellationPolicy[]
     */
    public $cancellationPolicies = [];

    /**
     * Информация о завтраке
     * Type: tns:BreakfastInfo
     * 
     * @var \Bronevik\HotelsConnector\Element\BreakfastInfo
     */
    public $breakfastInfo = null;

    /**
     * Количество гостей, которых можно разместить в номере
     * Type: xsd:int
     * 
     * @var int
     */
    public $roomCapacity = null;

    /**
     * тип номера
     * Type: xsd:string
     * 
     * @var string
     */
    public $roomType = null;

    /**
     * 
     */
    public function __construct()
    {
        $this->breakfastInfo = new \Bronevik\HotelsConnector\Element\BreakfastInfo;
    }

    /**
     * 
     * @param string $code 
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * 
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * 
     * @param string $name 
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 
     * @param float $price 
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * 
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * 
     * @param string $currency 
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * 
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * 
     * @param float $commission 
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;
    }

    /**
     * 
     * @return float
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * 
     * @param boolean $immediateConfirmation 
     */
    public function setImmediateConfirmation($immediateConfirmation)
    {
        $this->immediateConfirmation = $immediateConfirmation;
    }

    /**
     * 
     * @return boolean
     */
    public function getImmediateConfirmation()
    {
        return $this->immediateConfirmation;
    }

    /**
     * 
     * @param int $freeRooms 
     */
    public function setFreeRooms($freeRooms)
    {
        $this->freeRooms = $freeRooms;
    }

    /**
     * 
     * @return int
     */
    public function getFreeRooms()
    {
        return $this->freeRooms;
    }

    /**
     * 
     * @return bool
     */
    public function hasCancellationPolicies()
    {
        return count($this->cancellationPolicies) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\HotelOfferCancellationPolicy[]
     */
    public function getCancellationPolicies()
    {
        return $this->cancellationPolicies;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\HotelOfferCancellationPolicy $cancellationPolicies 
     */
    public function addCancellationPolicies($cancellationPolicies)
    {
        $this->cancellationPolicies[] = $cancellationPolicies;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\BreakfastInfo $breakfastInfo 
     */
    public function setBreakfastInfo($breakfastInfo)
    {
        $this->breakfastInfo = $breakfastInfo;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\BreakfastInfo
     */
    public function getBreakfastInfo()
    {
        return $this->breakfastInfo;
    }

    /**
     * 
     * @param int $roomCapacity 
     */
    public function setRoomCapacity($roomCapacity)
    {
        $this->roomCapacity = $roomCapacity;
    }

    /**
     * 
     * @return int
     */
    public function getRoomCapacity()
    {
        return $this->roomCapacity;
    }

    /**
     * 
     * @param string $roomType 
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;
    }

    /**
     * 
     * @return string
     */
    public function getRoomType()
    {
        return $this->roomType;
    }
}

