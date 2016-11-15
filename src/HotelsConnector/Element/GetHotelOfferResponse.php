<?php
namespace Bronevik\HotelsConnector\Element;

class GetHotelOfferResponse extends BaseResponse
{
    /**
     * Type: tns:HotelOffer
     * 
     * @var \Bronevik\HotelsConnector\Element\HotelOffer[]
     */
    public $offer = [];

    /**
     * 
     * @return bool
     */
    public function hasOffer()
    {
        return count($this->offer) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\HotelOffer[]
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\HotelOffer $offer 
     */
    public function addOffer($offer)
    {
        $this->offer[] = $offer;
    }
}

