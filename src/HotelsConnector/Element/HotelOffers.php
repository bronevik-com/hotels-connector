<?php

namespace Bronevik\HotelsConnector\Element;

class HotelOffers
{
    /**
     * @var HotelOffer[]
     */
    public $offer = [];

    /**
     * @return bool
     */
    public function hasOffer()
    {
        return count($this->offer) > 0;
    }

    /**
     * @return HotelOffer[]
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * @param HotelOffer $offer
     */
    public function addOffer($offer)
    {
        $this->offer[] = $offer;
    }
}
