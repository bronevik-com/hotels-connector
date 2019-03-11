<?php

namespace Bronevik\HotelsConnector\Element;

class HotelOffer
{
    /**
     * Код предложения
     * The offer code
     *
     * @var string
     */
    public $code;

    /**
     * Название предложения
     * The offer name
     *
     * @var string
     */
    public $name;

    /**
     * Флаг наличия lhp-цен в предложении
     * Specifies LHP-rate in the offer
     *
     * @var boolean
     */
    public $lhp;

    /**
     * Флаг невозвратности предложения
     * Whether the offer is non-refundable
     *
     * @var boolean
     */
    public $nonRefundable;

    /**
     * Детализация стоимости
     * The offer price details
     *
     * @var PriceDetails
     */
    public $priceDetails;

    /**
     * Дополнительные сборы при заселении
     * The additional fees at check-in
     *
     * @var Tax[]
     */
    public $taxes = [];

    /**
     * Валюта оплаты
     * The payment currency
     *
     * @var string
     */
    public $currency;

    /**
     * Возможность мгновенного подтверждения
     * Whether immediate confirmation is possible
     *
     * @var boolean
     */
    public $immediateConfirmation;

    /**
     * Количество доступных номеров
     * The amount of available rooms within this offer
     *
     * @var int
     */
    public $freeRooms;

    /**
     * Список политик аннуляций
     * The list of cancellation policies
     *
     * @var HotelOfferCancellationPolicy[]
     */
    public $cancellationPolicies = [];

    /**
     * Идентификатор номера
     * The room id
     *
     * @var int
     */
    public $roomId;

    /**
     * deprecated - перенесено в элемент 'HotelRoom'.
     *                                Количество гостей, которых можно разместить в номере
     * deprecated - currently available in 'HotelRoom' element.
     *                                The basic room capacity
     *
     * @var int
     */
    public $roomCapacity;

    /**
     * Тип размещения в номере
     * The room type
     *
     * @var string
     */
    public $roomType;

    /**
     * Является ли номер номером с подселением
     * Specifies whether the room is dorm or private
     *
     * @var boolean
     */
    public $isSharedRoom;

    /**
     * Является ли номер блочным (Блочный номер - это номер с общей ванной комнатой и туалетом для нескольких номеров)
     * Specifies whether the bathroom is located in the hallway and shared by all of the guests on that floor
     *
     * @var boolean
     */
    public $isBlockRoom;

    /**
     * Место оплаты
     * Specifies the payment scheme
     *
     * @var string
     */
    public $paymentRecipient;

    /**
     * ​Элемент для работы метапоисковых систем
     * The element for metasearch engines
     *
     * @var string
     */
    public $deepLink;

    /**
     * Ежедневная детализация стоимости проживания
     * The detailed daily cost of accommodation
     *
     * @var DailyPrices
     */
    public $dailyPrices;

    /**
     * Список доступных типов питания
     * The list of available meal services
     *
     * @var AvailableMeals
     */
    public $meals;

    /**
     * Правила предоставления предложения
     * A policies of granting current offer
     *
     * @var OfferPolicy[]
     */
    public $offerPolicies = [];

    public function __construct()
    {
        $this->priceDetails = new PriceDetails();
        $this->dailyPrices  = new DailyPrices();
        $this->meals        = new AvailableMeals();
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return boolean
     */
    public function getLhp()
    {
        return $this->lhp;
    }

    /**
     * @param boolean $lhp
     */
    public function setLhp($lhp)
    {
        $this->lhp = $lhp;
    }

    /**
     * @return boolean
     */
    public function getNonRefundable()
    {
        return $this->nonRefundable;
    }

    /**
     * @param boolean $nonRefundable
     */
    public function setNonRefundable($nonRefundable)
    {
        $this->nonRefundable = $nonRefundable;
    }

    /**
     * @return PriceDetails
     */
    public function getPriceDetails()
    {
        return $this->priceDetails;
    }

    /**
     * @param PriceDetails $priceDetails
     */
    public function setPriceDetails($priceDetails)
    {
        $this->priceDetails = $priceDetails;
    }

    /**
     * @return bool
     */
    public function hasTaxes()
    {
        return count($this->taxes) > 0;
    }

    /**
     * @return Tax[]
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * @param Tax $taxes
     */
    public function addTaxes($taxes)
    {
        $this->taxes[] = $taxes;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return boolean
     */
    public function getImmediateConfirmation()
    {
        return $this->immediateConfirmation;
    }

    /**
     * @param boolean $immediateConfirmation
     */
    public function setImmediateConfirmation($immediateConfirmation)
    {
        $this->immediateConfirmation = $immediateConfirmation;
    }

    /**
     * @return int
     */
    public function getFreeRooms()
    {
        return $this->freeRooms;
    }

    /**
     * @param int $freeRooms
     */
    public function setFreeRooms($freeRooms)
    {
        $this->freeRooms = $freeRooms;
    }

    /**
     * @return bool
     */
    public function hasCancellationPolicies()
    {
        return count($this->cancellationPolicies) > 0;
    }

    /**
     * @return HotelOfferCancellationPolicy[]
     */
    public function getCancellationPolicies()
    {
        return $this->cancellationPolicies;
    }

    /**
     * @param HotelOfferCancellationPolicy $cancellationPolicies
     */
    public function addCancellationPolicies($cancellationPolicies)
    {
        $this->cancellationPolicies[] = $cancellationPolicies;
    }

    /**
     * @return int
     */
    public function getRoomId()
    {
        return $this->roomId;
    }

    /**
     * @param int $roomId
     */
    public function setRoomId($roomId)
    {
        $this->roomId = $roomId;
    }

    /**
     * @return int
     */
    public function getRoomCapacity()
    {
        return $this->roomCapacity;
    }

    /**
     * @param int $roomCapacity
     */
    public function setRoomCapacity($roomCapacity)
    {
        $this->roomCapacity = $roomCapacity;
    }

    /**
     * @return string
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * @param string $roomType
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;
    }

    /**
     * @return boolean
     */
    public function getIsSharedRoom()
    {
        return $this->isSharedRoom;
    }

    /**
     * @param boolean $isSharedRoom
     */
    public function setIsSharedRoom($isSharedRoom)
    {
        $this->isSharedRoom = $isSharedRoom;
    }

    /**
     * @return boolean
     */
    public function getIsBlockRoom()
    {
        return $this->isBlockRoom;
    }

    /**
     * @param boolean $isBlockRoom
     */
    public function setIsBlockRoom($isBlockRoom)
    {
        $this->isBlockRoom = $isBlockRoom;
    }

    /**
     * @return string
     */
    public function getPaymentRecipient()
    {
        return $this->paymentRecipient;
    }

    /**
     * @param string $paymentRecipient
     */
    public function setPaymentRecipient($paymentRecipient)
    {
        $this->paymentRecipient = $paymentRecipient;
    }

    /**
     * @return string
     */
    public function getDeepLink()
    {
        return $this->deepLink;
    }

    /**
     * @param string $deepLink
     */
    public function setDeepLink($deepLink)
    {
        $this->deepLink = $deepLink;
    }

    /**
     * @return DailyPrices
     */
    public function getDailyPrices()
    {
        return $this->dailyPrices;
    }

    /**
     * @param DailyPrices $dailyPrices
     */
    public function setDailyPrices($dailyPrices)
    {
        $this->dailyPrices = $dailyPrices;
    }

    /**
     * @return AvailableMeals
     */
    public function getMeals()
    {
        return $this->meals;
    }

    /**
     * @param AvailableMeals $meals
     */
    public function setMeals($meals)
    {
        $this->meals = $meals;
    }

    /**
     * @return bool
     */
    public function hasOfferPolicies()
    {
        return count($this->offerPolicies) > 0;
    }

    /**
     * @return OfferPolicy[]
     */
    public function getOfferPolicies()
    {
        return $this->offerPolicies;
    }

    /**
     * @param OfferPolicy $offerPolicies
     */
    public function addOfferPolicies($offerPolicies)
    {
        $this->offerPolicies[] = $offerPolicies;
    }
}
