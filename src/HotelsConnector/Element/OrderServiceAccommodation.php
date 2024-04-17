<?php

namespace Bronevik\HotelsConnector\Element;

class OrderServiceAccommodation extends OrderService
{
    /**
     * Договор, на который оформлено бронирование
     * The information about contract of booking
     *
     * @var Contract
     */
    public $contract;

    /**
     * Код предложения
     * The offer code
     *
     * @var string
     */
    public $offerCode;

    /**
     * Название предложения
     * The offer name
     *
     * @var string
     */
    public $offerName;

    /**
     * Идентификатор отеля
     * The hotel id
     *
     * @var int
     */
    public $hotelId;

    /**
     * Название отеля
     * The hotel name
     *
     * @var string
     */
    public $hotelName;

    /**
     * Идентификатор номера
     * The room id
     *
     * @var int
     */
    public $roomId;

    /**
     * Тип размещения в номере
     * The room type
     *
     * @var string
     */
    public $roomType;

    /**
     * Дата и время заезда
     * The check-in date and time
     *
     * @var string
     */
    public $checkin;

    /**
     * Дата и время выезда
     * The check-out date and time
     *
     * @var string
     */
    public $checkout;

    /**
     * ФИО гостей
     * The name of guests
     *
     * @var Guests
     */
    public $guests;


    /**
     * @var ChildrenAccommodation|null
     */
    public $children;
    /**
     * Комментарии
     * An important information about accommodation
     *
     * @var string
     */
    public $comment;

    /**
     * Флаг невозвратности предложения
     * Whether the offer is non-refundable
     *
     * @var boolean
     */
    public $nonRefundable;

    /**
     * Является ли номер блочным. Блочный номер - это номер с общей ванной комнатой и туалетом для нескольких номеров
     * Specifies whether the bathroom is located in the hallway and shared by all of the guests on that floor
     *
     * @var boolean
     */
    public $isBlockRoom;

    /**
     * Является ли номер номером с подселением
     * Specifies whether the room is dorm or private
     *
     * @var bool
     */
    public $isSharedRoom;

    /**
     * Место оплаты
     * Specifies the payment scheme
     *
     * @var string
     */
    public $paymentRecipient;

    /**
     * Доп. поля услуг
     * Extra fields for services
     *
     * @var ServiceExtraField[]
     */
    public $extraField = [];

    /**
     * Размер НДС в процентах.
     * VAT percentage rate
     *
     * @var int
     * @see VatPercents
     */
    public $VATPercent;

    /**
     * Информация о типе тарифа.
     * Information about rate type.
     *
     * @var RateType
     */
    public $rateType;

    /**
     * Информация о типе гарантии.
     * Information about guarantee type.
     *
     * @var string
     */
    public $guaranteeType;

    /**
     * Информация о питании
     * An information about meal service
     *
     * @var AvailableMeals | null
     */
    public $meals;

    /**
     * Правила предоставления заказа
     * A policies of granting current offer
     *
     * @var OfferPolicies
     */
    public $offerPolicies;

    /**
     * Детализация стоимости на каждый день проживания
     * The detailed daily cost of accommodation
     *
     * @var DailyPrices | null
     */
    public $dailyPrices;

    /**
     * Условия оплаты.
     * Payment terms.
     *
     * @var string
     */
    public $paymentTerms;

    /**
     * Предпочитаемые кровати
     * Preferred Beds
     *
     * @var BedSet|null
     */
    public $preferredBedSet;

    public function __construct()
    {
        parent::__construct();
        $this->contract      = new Contract();
        $this->rateType      = new RateType();
        $this->offerPolicies = new OfferPolicies();
        $this->dailyPrices   = new DailyPrices();
        $this->meals         = new AvailableMeals();
        $this->guests        = new Guests();
        $this->children      = new ChildrenAccommodation();
    }

    /**
     * @param Contract $contract
     */
    public function setContract($contract)
    {
        $this->contract = $contract;
    }

    /**
     * @return Contract
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * @param string $offerCode
     */
    public function setOfferCode($offerCode)
    {
        $this->offerCode = $offerCode;
    }

    /**
     * @return string
     */
    public function getOfferCode()
    {
        return $this->offerCode;
    }

    /**
     * @param string $offerName
     */
    public function setOfferName($offerName)
    {
        $this->offerName = $offerName;
    }

    /**
     * @return string
     */
    public function getOfferName()
    {
        return $this->offerName;
    }

    /**
     * @param int $hotelId
     */
    public function setHotelId($hotelId)
    {
        $this->hotelId = $hotelId;
    }

    /**
     * @return int
     */
    public function getHotelId()
    {
        return $this->hotelId;
    }

    /**
     * @param string $hotelName
     */
    public function setHotelName($hotelName)
    {
        $this->hotelName = $hotelName;
    }

    /**
     * @return string
     */
    public function getHotelName()
    {
        return $this->hotelName;
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
    public function getRoomId()
    {
        return $this->roomId;
    }

    /**
     * @param string $roomType
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;
    }

    /**
     * @return string
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * @param string $checkin
     */
    public function setCheckin($checkin)
    {
        $this->checkin = $checkin;
    }

    /**
     * @return string
     */
    public function getCheckin()
    {
        return $this->checkin;
    }

    /**
     * @param string $checkout
     */
    public function setCheckout($checkout)
    {
        $this->checkout = $checkout;
    }

    /**
     * @return string
     */
    public function getCheckout()
    {
        return $this->checkout;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param boolean $nonRefundable
     */
    public function setNonRefundable($nonRefundable)
    {
        $this->nonRefundable = $nonRefundable;
    }

    /**
     * @return boolean
     */
    public function getNonRefundable()
    {
        return $this->nonRefundable;
    }

    /**
     * @param boolean $isBlockRoom
     */
    public function setIsBlockRoom($isBlockRoom)
    {
        $this->isBlockRoom = $isBlockRoom;
    }

    /**
     * @return boolean
     */
    public function getIsBlockRoom()
    {
        return $this->isBlockRoom;
    }

    /**
     * @param bool $isSharedRoom
     */
    public function setIsSharedRoom($isSharedRoom)
    {
        $this->isSharedRoom = $isSharedRoom;
    }

    /**
     * @return bool
     */
    public function getIsSharedRoom()
    {
        return $this->isSharedRoom;
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
    public function getPaymentRecipient()
    {
        return $this->paymentRecipient;
    }

    /**
     * @return bool
     */
    public function hasExtraField()
    {
        return count($this->extraField) > 0;
    }

    /**
     * @return ServiceExtraField[]
     */
    public function getExtraField()
    {
        return $this->extraField;
    }

    /**
     * @param ServiceExtraField $extraField
     */
    public function addExtraField($extraField)
    {
        $this->extraField[] = $extraField;
    }

    /**
     * @param int $VATPercent
     */
    public function setVATPercent($VATPercent)
    {
        $this->VATPercent = $VATPercent;
    }

    /**
     * @return int
     * @see VatPercents
     */
    public function getVATPercent()
    {
        return $this->VATPercent;
    }

    /**
     * @param RateType $rateType
     */
    public function setRateType($rateType)
    {
        $this->rateType = $rateType;
    }

    /**
     * @return RateType
     */
    public function getRateType()
    {
        return $this->rateType;
    }

    /**
     * @param string $guaranteeType
     */
    public function setGuaranteeType($guaranteeType)
    {
        $this->guaranteeType = $guaranteeType;
    }

    /**
     * @return string
     */
    public function getGuaranteeType()
    {
        return $this->guaranteeType;
    }

    /**
     * @param OfferPolicies $offerPolicies
     */
    public function setOfferPolicies($offerPolicies)
    {
        $this->offerPolicies = $offerPolicies;
    }

    /**
     * @return OfferPolicies
     */
    public function getOfferPolicies()
    {
        return $this->offerPolicies;
    }

    /**
     * @param DailyPrices | null $dailyPrices
     */
    public function setDailyPrices($dailyPrices)
    {
        $this->dailyPrices = $dailyPrices;
    }

    /**
     * @return DailyPrices | null
     */
    public function getDailyPrices()
    {
        return $this->dailyPrices;
    }

    /**
     * @return AvailableMeals | null
     */
    public function getMeals()
    {
        return $this->meals;
    }

    /**
     * @param AvailableMeals | null $meals
     */
    public function setMeals($meals)
    {
        $this->meals = $meals;
    }

    /**
     * @return string
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * @param string $paymentTerms
     */
    public function setPaymentTerms($paymentTerms)
    {
        $this->paymentTerms = $paymentTerms;
    }

    /**
     * @return Guests
     */
    public function getGuests()
    {
        return $this->guests;
    }

    /**
     * @param Guests $guests
     */
    public function setGuests($guests)
    {
        $this->guests = $guests;
    }

    /**
     * @return ChildrenAccommodation|null
     */
    public function getChildrenAccommodation()
    {
        return $this->children;
    }

    /**
     * @param ChildrenAccommodation|null $children
     */
    public function setChildrenAccommodation($children)
    {
        $this->children = $children;
    }

    /**
     * @return BedSet|null
     */
    public function getPreferredBedSet()
    {
        return $this->preferredBedSet;
    }

    /**
     * @param BedSet|null $preferredBedSet
     */
    public function setPreferredBedSet($preferredBedSet)
    {
        $this->preferredBedSet = $preferredBedSet;
    }


}
