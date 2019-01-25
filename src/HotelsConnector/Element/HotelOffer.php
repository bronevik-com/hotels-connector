<?php
namespace Bronevik\HotelsConnector\Element;

class HotelOffer
{
    /**
     * Код предложения
     * The offer code
     * Type: xsd:string
     * 
     * @var string
     */
    public $code = null;

    /**
     * Название предложения
     * The offer name
     * Type: xsd:string
     * 
     * @var string
     */
    public $name = null;

    /**
     * Флаг наличия lhp-цен в предложении
     * Specifies LHP-rate in the offer
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $lhp = null;

    /**
     * Флаг невозвратности предложения
     * Whether the offer is non-refundable
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $nonRefundable = null;

    /**
     * Детализация стоимости
     * The offer price details
     * Type: tns:PriceDetails
     * 
     * @var \Bronevik\HotelsConnector\Element\PriceDetails
     */
    public $priceDetails = null;

    /**
     * Дополнительные сборы при заселении
     * The additional fees at check-in
     * Type: tns:Tax
     * 
     * @var \Bronevik\HotelsConnector\Element\Tax[]
     */
    public $taxes = [];

    /**
     * Валюта оплаты
     * The payment currency
     * Type: tns:Currency
     * 
     * @var string
     */
    public $currency = null;

    /**
     * Возможность мгновенного подтверждения
     * Whether immediate confirmation is possible
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $immediateConfirmation = null;

    /**
     * Количество доступных номеров
     * The amount of available rooms within this offer
     * Type: xsd:int
     * 
     * @var int
     */
    public $freeRooms = null;

    /**
     * Список политик аннуляций
     * The list of cancellation policies
     * Type: tns:HotelOfferCancellationPolicy
     * 
     * @var \Bronevik\HotelsConnector\Element\HotelOfferCancellationPolicy[]
     */
    public $cancellationPolicies = [];

    /**
     * Идентификатор номера
     * The room id
     * Type: xsd:int
     * 
     * @var int
     */
    public $roomId = null;

    /**
     * deprecated - перенесено в элемент 'HotelRoom'.
     * 								Количество гостей, которых можно разместить в номере
     * deprecated - currently available in 'HotelRoom' element.
     * 								The basic room capacity
     * Type: xsd:int
     * 
     * @var int
     */
    public $roomCapacity = null;

    /**
     * Тип размещения в номере
     * The room type
     * Type: xsd:string
     * 
     * @var string
     */
    public $roomType = null;

    /**
     * Является ли номер номером с подселением
     * Specifies whether the room is dorm or private
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $isSharedRoom = null;

    /**
     * Является ли номер блочным (Блочный номер - это номер с общей ванной комнатой и туалетом для нескольких номеров)
     * Specifies whether the bathroom is located in the hallway and shared by all of the guests on that floor
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $isBlockRoom = null;

    /**
     * Место оплаты
     * Specifies the payment scheme
     * Type: tns:PaymentRecipients
     * 
     * @var string
     */
    public $paymentRecipient = null;

    /**
     * ​Элемент для работы метапоисковых систем
     * The element for metasearch engines
     * Type: xsd:string
     * 
     * @var string
     */
    public $deepLink = null;

    /**
     * Ежедневная детализация стоимости проживания
     * The detailed daily cost of accommodation
     * Type: tns:DailyPrices
     * 
     * @var \Bronevik\HotelsConnector\Element\DailyPrices
     */
    public $dailyPrices = null;

    /**
     * Список доступных типов питания
     * The list of available meal services
     * Type: tns:AvailableMeals
     * 
     * @var \Bronevik\HotelsConnector\Element\AvailableMeals
     */
    public $meals = null;

    /**
     * Правила предоставления предложения
     * A policies of granting current offer
     * Type: tns:OfferPolicy
     * 
     * @var \Bronevik\HotelsConnector\Element\OfferPolicy[]
     */
    public $offerPolicies = [];

    /**
     * 
     */
    public function __construct()
    {
        $this->priceDetails = new \Bronevik\HotelsConnector\Element\PriceDetails;
        $this->dailyPrices = new \Bronevik\HotelsConnector\Element\DailyPrices;
        $this->meals = new \Bronevik\HotelsConnector\Element\AvailableMeals;
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
     * @param boolean $lhp 
     */
    public function setLhp($lhp)
    {
        $this->lhp = $lhp;
    }

    /**
     * 
     * @return boolean
     */
    public function getLhp()
    {
        return $this->lhp;
    }

    /**
     * 
     * @param boolean $nonRefundable 
     */
    public function setNonRefundable($nonRefundable)
    {
        $this->nonRefundable = $nonRefundable;
    }

    /**
     * 
     * @return boolean
     */
    public function getNonRefundable()
    {
        return $this->nonRefundable;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\PriceDetails $priceDetails 
     */
    public function setPriceDetails($priceDetails)
    {
        $this->priceDetails = $priceDetails;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\PriceDetails
     */
    public function getPriceDetails()
    {
        return $this->priceDetails;
    }

    /**
     * 
     * @return bool
     */
    public function hasTaxes()
    {
        return count($this->taxes) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\Tax[]
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\Tax $taxes 
     */
    public function addTaxes($taxes)
    {
        $this->taxes[] = $taxes;
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
     * @param int $roomId 
     */
    public function setRoomId($roomId)
    {
        $this->roomId = $roomId;
    }

    /**
     * 
     * @return int
     */
    public function getRoomId()
    {
        return $this->roomId;
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

    /**
     * 
     * @param boolean $isSharedRoom 
     */
    public function setIsSharedRoom($isSharedRoom)
    {
        $this->isSharedRoom = $isSharedRoom;
    }

    /**
     * 
     * @return boolean
     */
    public function getIsSharedRoom()
    {
        return $this->isSharedRoom;
    }

    /**
     * 
     * @param boolean $isBlockRoom 
     */
    public function setIsBlockRoom($isBlockRoom)
    {
        $this->isBlockRoom = $isBlockRoom;
    }

    /**
     * 
     * @return boolean
     */
    public function getIsBlockRoom()
    {
        return $this->isBlockRoom;
    }

    /**
     * 
     * @param string $paymentRecipient 
     */
    public function setPaymentRecipient($paymentRecipient)
    {
        $this->paymentRecipient = $paymentRecipient;
    }

    /**
     * 
     * @return string
     */
    public function getPaymentRecipient()
    {
        return $this->paymentRecipient;
    }

    /**
     * 
     * @param string $deepLink 
     */
    public function setDeepLink($deepLink)
    {
        $this->deepLink = $deepLink;
    }

    /**
     * 
     * @return string
     */
    public function getDeepLink()
    {
        return $this->deepLink;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\DailyPrices $dailyPrices 
     */
    public function setDailyPrices($dailyPrices)
    {
        $this->dailyPrices = $dailyPrices;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\DailyPrices
     */
    public function getDailyPrices()
    {
        return $this->dailyPrices;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\AvailableMeals $meals 
     */
    public function setMeals($meals)
    {
        $this->meals = $meals;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\AvailableMeals
     */
    public function getMeals()
    {
        return $this->meals;
    }

    /**
     * 
     * @return bool
     */
    public function hasOfferPolicies()
    {
        return count($this->offerPolicies) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\OfferPolicy[]
     */
    public function getOfferPolicies()
    {
        return $this->offerPolicies;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\OfferPolicy $offerPolicies 
     */
    public function addOfferPolicies($offerPolicies)
    {
        $this->offerPolicies[] = $offerPolicies;
    }
}

