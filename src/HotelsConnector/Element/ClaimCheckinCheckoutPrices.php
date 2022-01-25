<?php


namespace Bronevik\HotelsConnector\Element;

class ClaimCheckinCheckoutPrices
{
    /**
     * Цены за ранний заезд.
     * Prices for early arrival.
     *
     * @var OfferHourPrices | null
     */
    public $checkin;

    /**
     * Цены за поздний выезд.
     * Prices for late departure.
     *
     * @var OfferHourPrices | null
     */
    public $checkout;

    /**
     * @return OfferHourPrices | null
     */
    public function getCheckin()
    {
        return $this->checkin;
    }

    /**
     * @return OfferHourPrices | null
     */
    public function getCheckout()
    {
        return $this->checkout;
    }

    /**
     * @param OfferHourPrices | null $checkin
     */
    public function setCheckin($checkin)
    {
        $this->checkin = $checkin;
    }

    /**
     * @param OfferHourPrices | null $checkout
     */
    public function setCheckout($checkout)
    {
        $this->checkout = $checkout;
    }
}
