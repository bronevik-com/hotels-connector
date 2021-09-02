<?php declare(strict_types=1);


namespace Bronevik\HotelsConnector\Element;


class ClaimCheckinCheckoutPrices
{
    /**
     * @var OfferHourPrices | null
     */
    public $checkin = null;

    /**
     * @var OfferHourPrices
     */
    public $checkout = null;

    /**
     * @return OfferHourPrices|null
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
}
