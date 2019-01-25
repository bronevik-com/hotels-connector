<?php
namespace Bronevik\HotelsConnector\Element;

/**
 * Отели с предложениями
 * The hotels with offers
 * 
 */
class HotelWithOffers extends Hotel
{
    /**
     * Включен ли НДС в стоимость
     * Flag of whether VAT is included in the client’s price
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $vatIncluded = null;

    /**
     * Размер НДС
     * The VAT amount
     * Type: xsd:float
     * 
     * @var float
     */
    public $VATPercent = null;

    /**
     * Список предложений
     * The list of offers
     * Type: tns:HotelOffers
     * 
     * @var \Bronevik\HotelsConnector\Element\HotelOffers
     */
    public $offers = null;

    /**
     * 
     */
    public function __construct()
    {
        $this->offers = new \Bronevik\HotelsConnector\Element\HotelOffers;
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

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\HotelOffers $offers 
     */
    public function setOffers($offers)
    {
        $this->offers = $offers;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\HotelOffers
     */
    public function getOffers()
    {
        return $this->offers;
    }
}

