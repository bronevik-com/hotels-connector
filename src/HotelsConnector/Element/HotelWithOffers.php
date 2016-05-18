<?php
namespace Bronevik\HotelsConnector\Element;

class HotelWithOffers extends Hotel
{
    /**
     * Type: tns:HotelOffer
     * 
     * @var \Bronevik\HotelsConnector\Element\HotelOffer[]
     */
    public $offers = [];

    /**
     * Type: xsd:float
     * 
     * @var float
     */
    public $VATPercent = null;

    /**
     * 
     * @return bool
     */
    public function hasOffers()
    {
        return count($this->offers) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\HotelOffer[]
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\HotelOffer $offers 
     */
    public function addOffers($offers)
    {
        $this->offers[] = $offers;
    }

    /**
     * 
     * @param float $VATPercent 
     */
    public function setVATPercent($VATPercent)
    {
        $this->VATPercent = $VATPercent;
    }

    /**
     * 
     * @return float
     */
    public function getVATPercent()
    {
        return $this->VATPercent;
    }
}

