<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Отели с предложениями
 * The hotels with offers
 */
class HotelWithOffers extends Hotel
{
    /**
     * Включен ли НДС в стоимость
     * Flag of whether VAT is included in the client’s price
     *
     * @var boolean
     */
    public $vatIncluded;

    /**
     * Размер НДС
     * The VAT amount
     *
     * @var float
     */
    public $VATPercent;

    /**
     * Список предложений
     * The list of offers
     *
     * @var HotelOffers
     */
    public $offers;

    public function __construct()
    {
        parent::__construct();
        $this->offers = new HotelOffers();
    }

    /**
     * @return boolean
     */
    public function getVatIncluded()
    {
        return $this->vatIncluded;
    }

    /**
     * @param boolean $vatIncluded
     */
    public function setVatIncluded($vatIncluded)
    {
        $this->vatIncluded = $vatIncluded;
    }

    /**
     * @return float
     */
    public function getVATPercent()
    {
        return $this->VATPercent;
    }

    /**
     * @param float $VATPercent
     */
    public function setVATPercent($VATPercent)
    {
        $this->VATPercent = $VATPercent;
    }

    /**
     * @return HotelOffers
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param HotelOffers $offers
     */
    public function setOffers($offers)
    {
        $this->offers = $offers;
    }
}
