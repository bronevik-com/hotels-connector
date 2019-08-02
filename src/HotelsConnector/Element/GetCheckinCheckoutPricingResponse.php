<?php

namespace Bronevik\HotelsConnector\Element;

class GetCheckinCheckoutPricingResponse extends BaseResponse
{
    /**
     * Офферы с ценами РЗ и ПВ.
     * Offers with prices EA and LD.
     *
     * @var OffersCheckinCheckoutPrices
     */
    public $checkinCheckoutPrices;

    public function __construct()
    {
        $this->checkinCheckoutPrices = new OffersCheckinCheckoutPrices();
    }

    /**
     * @param OffersCheckinCheckoutPrices $checkinCheckoutPrices
     */
    public function setCheckinCheckoutPrices($checkinCheckoutPrices)
    {
        $this->checkinCheckoutPrices = $checkinCheckoutPrices;
    }

    /**
     * @return OffersCheckinCheckoutPrices
     */
    public function getCheckinCheckoutPrices()
    {
        return $this->checkinCheckoutPrices;
    }
}
