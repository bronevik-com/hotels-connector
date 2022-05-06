<?php

namespace Bronevik\HotelsConnector\Element;

use Bronevik\HotelsConnector\Enum\PaymentRecipients;

class BaseOffer
{
    /**
     * Название предложения
     * The offer name
     *
     * @var string
     */
    public $name;

    /**
     * Идентификатор номера
     * The room id
     * Type: xsd:int
     *
     * @var int
     */
    public $roomId;

    /**
     * Список политик аннуляций
     * The list of cancellation policies
     *
     * @var HotelOfferCancellationPolicy[]
     */
    public $cancellationPolicies = [];

    /**
     * Список доступных типов питания
     * The list of available meal services
     *
     * @var AvailableMeals
     */
    public $meals;

    /**
     * Количество доступных номеров
     * The amount of available rooms within this offer
     *
     * @var int
     */
    public $freeRooms;

    /**
     * Место оплаты
     * Specifies the payment scheme
     *
     * @var string
     * @see PaymentRecipients
     */
    public $paymentRecipient;

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
     * Является ли номер блочным (Блочный номер - это номер с общей ванной комнатой и туалетом
     *                                 для нескольких номеров)
     * Specifies whether the bathroom is located in the hallway and shared by all of the guests
     *                                 on that floor
     *
     * @var boolean
     */
    public $isBlockRoom;

    /**
     * Флаг невозвратности предложения
     * Whether the offer is non-refundable
     *
     * @var boolean
     */
    public $nonRefundable;

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
     * Информация о размещении детей.
     * Information about the placement of children.
     *
     * @var ChildrenAccommodation
     */
    public $childrenAccommodation;

    public function __construct()
    {
        $this->meals    = new AvailableMeals();
        $this->rateType = new RateType();
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
     * @param AvailableMeals $meals
     */
    public function setMeals($meals)
    {
        $this->meals = $meals;
    }

    /**
     * @return AvailableMeals
     */
    public function getMeals()
    {
        return $this->meals;
    }

    /**
     * @param int $freeRooms
     */
    public function setFreeRooms($freeRooms)
    {
        $this->freeRooms = $freeRooms;
    }

    /**
     * @return int
     */
    public function getFreeRooms()
    {
        return $this->freeRooms;
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
     * @param boolean $isSharedRoom
     */
    public function setIsSharedRoom($isSharedRoom)
    {
        $this->isSharedRoom = $isSharedRoom;
    }

    /**
     * @return boolean
     */
    public function getIsSharedRoom()
    {
        return $this->isSharedRoom;
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
     * @return ChildrenAccommodation
     */
    public function getChildrenAccommodation()
    {
        return $this->childrenAccommodation;
    }

    /**
     * @param ChildrenAccommodation $childrenAccommodation
     *
     * @return BaseOffer
     */
    public function setChildrenAccommodation($childrenAccommodation)
    {
        $this->childrenAccommodation = $childrenAccommodation;

        return $this;
    }


}
