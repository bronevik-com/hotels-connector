<?php
namespace Bronevik\HotelsConnector\Element;

class OrderServiceAccommodation extends OrderService
{
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
}

