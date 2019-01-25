<?php
namespace Bronevik\HotelsConnector\Element;

class OrderServiceAccommodation extends OrderService
{
    /**
     * Договор, на который оформлено бронирование
     * The information about contract of booking
     * Type: tns:Contract
     * 
     * @var \Bronevik\HotelsConnector\Element\Contract
     */
    public $contract = null;

    /**
     * Код предложения
     * The offer code
     * Type: xsd:string
     * 
     * @var string
     */
    public $offerCode = null;

    /**
     * Название предложения
     * The offer name
     * Type: xsd:string
     * 
     * @var string
     */
    public $offerName = null;

    /**
     * Идентификатор отеля
     * The hotel id
     * Type: xsd:int
     * 
     * @var int
     */
    public $hotelId = null;

    /**
     * Название отеля
     * The hotel name
     * Type: xsd:string
     * 
     * @var string
     */
    public $hotelName = null;

    /**
     * Идентификатор номера
     * The room id
     * Type: xsd:int
     * 
     * @var int
     */
    public $roomId = null;

    /**
     * Тип размещения в номере
     * The room type
     * Type: xsd:string
     * 
     * @var string
     */
    public $roomType = null;

    /**
     * Дата и время заезда
     * The check-in date and time
     * Type: xsd:dateTime
     * 
     * @var string
     */
    public $checkin = null;

    /**
     * Дата и время выезда
     * The check-out date and time
     * Type: xsd:dateTime
     * 
     * @var string
     */
    public $checkout = null;

    /**
     * ФИО гостей
     * The name of guests
     * Type: xsd:string
     * 
     * @var string[]
     */
    public $guests = [];

    /**
     * Комментарии
     * An important information about accommodation
     * Type: xsd:string
     * 
     * @var string
     */
    public $comment = null;

    /**
     * Флаг невозвратности предложения
     * Whether the offer is non-refundable
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $nonRefundable = null;

    /**
     * Является ли номер блочным. Блочный номер - это номер с общей ванной комнатой и туалетом для нескольких номеров
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
     * Доп. поля услуг
     * Extra fields for services
     * Type: tns:ServiceExtraField
     * 
     * @var \Bronevik\HotelsConnector\Element\ServiceExtraField[]
     */
    public $extraField = [];

    /**
     * Информация о питании
     * An information about meal service
     * Type: tns:AvailableMeal
     * 
     * @var \Bronevik\HotelsConnector\Element\AvailableMeal[]
     */
    public $meals = [];

    /**
     * Правила предоставления заказа
     * A policies of granting current offer
     * Type: tns:OfferPolicy
     * 
     * @var \Bronevik\HotelsConnector\Element\OfferPolicy[]
     */
    public $offerPolicies = [];

    /**
     * Детализация стоимости на каждый день проживания
     * The detailed daily cost of accommodation
     * Type: tns:DailyPrices
     * 
     * @var \Bronevik\HotelsConnector\Element\DailyPrices
     */
    public $dailyPrices = null;

    /**
     * 
     */
    public function __construct()
    {
        $this->contract = new \Bronevik\HotelsConnector\Element\Contract;
        $this->dailyPrices = new \Bronevik\HotelsConnector\Element\DailyPrices;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\Contract $contract 
     */
    public function setContract($contract)
    {
        $this->contract = $contract;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\Contract
     */
    public function getContract()
    {
        return $this->contract;
    }

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
     * @param string $offerName 
     */
    public function setOfferName($offerName)
    {
        $this->offerName = $offerName;
    }

    /**
     * 
     * @return string
     */
    public function getOfferName()
    {
        return $this->offerName;
    }

    /**
     * 
     * @param int $hotelId 
     */
    public function setHotelId($hotelId)
    {
        $this->hotelId = $hotelId;
    }

    /**
     * 
     * @return int
     */
    public function getHotelId()
    {
        return $this->hotelId;
    }

    /**
     * 
     * @param string $hotelName 
     */
    public function setHotelName($hotelName)
    {
        $this->hotelName = $hotelName;
    }

    /**
     * 
     * @return string
     */
    public function getHotelName()
    {
        return $this->hotelName;
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
     * @param string $checkin 
     */
    public function setCheckin($checkin)
    {
        $this->checkin = $checkin;
    }

    /**
     * 
     * @return string
     */
    public function getCheckin()
    {
        return $this->checkin;
    }

    /**
     * 
     * @param string $checkout 
     */
    public function setCheckout($checkout)
    {
        $this->checkout = $checkout;
    }

    /**
     * 
     * @return string
     */
    public function getCheckout()
    {
        return $this->checkout;
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
     * @return bool
     */
    public function hasExtraField()
    {
        return count($this->extraField) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\ServiceExtraField[]
     */
    public function getExtraField()
    {
        return $this->extraField;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\ServiceExtraField $extraField 
     */
    public function addExtraField($extraField)
    {
        $this->extraField[] = $extraField;
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
     * @return \Bronevik\HotelsConnector\Element\AvailableMeal[]
     */
    public function getMeals()
    {
        return $this->meals;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\AvailableMeal $meals 
     */
    public function addMeals($meals)
    {
        $this->meals[] = $meals;
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
}

