<?php


namespace Bronevik\HotelsConnector\Element;

class ClaimCheckinCheckoutPrices
{
    /**
     * Информация о раннем заезде
     * Early check-in information
     *
     * @var OfferHourPrices
     */
    public $checkin;

    /**
     * Информация о позднем выезде
     * Late check-out information
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
