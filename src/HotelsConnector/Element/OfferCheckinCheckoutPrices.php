<?php

namespace Bronevik\HotelsConnector\Element;

class OfferCheckinCheckoutPrices
{
    /**
     * Код предложения.
     * Offer code.
     *
     * @var string
     */
    public $offerCode;

    /**
     * Цены за ранний заезд.
     * Prices for early arrival.
     *
     * @var OfferHourPrices
     */
    public $checkin;

    /**
     * Цены за поздний выезд.
     * Prices for late departure.
     *
     * @var OfferHourPrices
     */
    public $checkout;

    public function __construct()
    {
        $this->checkin  = new OfferHourPrices();
        $this->checkout = new OfferHourPrices();
    }

    /**
     * @param string $offerCode
     */
    public function setOfferCode($offerCode)
    {
        $this->offerCode = $offerCode;
    }

    /**
     * @return string
     */
    public function getOfferCode()
    {
        return $this->offerCode;
    }

    /**
     * @param OfferHourPrices $checkin
     */
    public function setCheckin($checkin)
    {
        $this->checkin = $checkin;
    }

    /**
     * @return OfferHourPrices
     */
    public function getCheckin()
    {
        return $this->checkin;
    }

    /**
     * @param OfferHourPrices $checkout
     */
    public function setCheckout($checkout)
    {
        $this->checkout = $checkout;
    }

    /**
     * @return OfferHourPrices
     */
    public function getCheckout()
    {
        return $this->checkout;
    }
}
