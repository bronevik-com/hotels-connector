<?php
namespace Bronevik\HotelsConnector\Element;

class OrderServiceAccommodation extends OrderService
{
    /**
     * Сведения о договоре, на основании которого произведено бронирование
     * Type: tns:Contract
     * 
     * @var \Bronevik\HotelsConnector\Element\Contract
     */
    public $contract = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $offerCode = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $offerName = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $hotelId = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $hotelName = null;

    /**
     * Type: xsd:int
     * 
     * @var int
     */
    public $roomId = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $roomType = null;

    /**
     * Type: xsd:dateTime
     * 
     * @var string
     */
    public $checkin = null;

    /**
     * Type: xsd:dateTime
     * 
     * @var string
     */
    public $checkout = null;

    /**
     * Type: xsd:string
     * 
     * @var string[]
     */
    public $guests = [];

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $comment = null;

    /**
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $vatApplicable = null;

    /**
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $vatIncluded = null;

    /**
     * Type: xsd:float
     * 
     * @var float
     */
    public $vatAmount = null;

    /**
     * Флаг невозвратности предложения
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $nonRefundable = null;

    /**
     * Номер является блочным. Блочный номер - это номер с общей ванной комнатой и
     *                                         туалетом для нескольких номеров
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $isBlockRoom = null;

    /**
     * Type: tns:PaymentRecipients
     * 
     * @var string
     */
    public $paymentRecipient = null;

    /**
     * Type: tns:AvailableMeal
     * 
     * @var \Bronevik\HotelsConnector\Element\AvailableMeal[]
     */
    public $meals = [];

    /**
     * 
     */
    public function __construct()
    {
        $this->contract = new \Bronevik\HotelsConnector\Element\Contract;
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
     * @param string $hotelId 
     */
    public function setHotelId($hotelId)
    {
        $this->hotelId = $hotelId;
    }

    /**
     * 
     * @return string
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
     * @param boolean $vatApplicable 
     */
    public function setVatApplicable($vatApplicable)
    {
        $this->vatApplicable = $vatApplicable;
    }

    /**
     * 
     * @return boolean
     */
    public function getVatApplicable()
    {
        return $this->vatApplicable;
    }

    /**
     * 
     * @param boolean $vatIncluded 
     */
    public function setVatIncluded($vatIncluded)
    {
        $this->vatIncluded = $vatIncluded;
    }

    /**
     * 
     * @return boolean
     */
    public function getVatIncluded()
    {
        return $this->vatIncluded;
    }

    /**
     * 
     * @param float $vatAmount 
     */
    public function setVatAmount($vatAmount)
    {
        $this->vatAmount = $vatAmount;
    }

    /**
     * 
     * @return float
     */
    public function getVatAmount()
    {
        return $this->vatAmount;
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
}

