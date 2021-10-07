<?php


namespace Bronevik\HotelsConnector\Element;

class ClaimCheckinCheckoutPrices
{
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

    /**
     * @return OfferHourPrices
     */
    public function getCheckin()
    {
        return $this->checkin;
    }

    /**
     * @return OfferHourPrices
     */
    public function getCheckout()
    {
        return $this->checkout;
    }

    /**
     * @param OfferHourPrices $checkin
     */
    public function setCheckin($checkin)
    {
        $this->checkin = $checkin;
    }

    /**
     * @param OfferHourPrices $checkout
     */
    public function setCheckout($checkout)
    {
        $this->checkout = $checkout;
    }
}
