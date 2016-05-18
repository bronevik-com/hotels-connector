<?php
namespace Bronevik\HotelsConnector\Element;

class GetHotelOfferResponse extends BaseResponse
{
    /**
     * Type: tns:HotelOffer
     * 
     * @var \Bronevik\HotelsConnector\Element\HotelOffer
     */
    public $offer = null;

    /**
     * 
     */
    public function __construct()
    {
        $this->offer = new \Bronevik\HotelsConnector\Element\HotelOffer;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\HotelOffer $offer 
     */
    public function setOffer($offer)
    {
        $this->offer = $offer;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\HotelOffer
     */
    public function getOffer()
    {
        return $this->offer;
    }
}

