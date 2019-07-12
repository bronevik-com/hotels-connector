<?php

namespace Bronevik\HotelsConnector\Element;

class OffersCheckinCheckoutPrices
{
    /**
     * Массив офферов с ценами РЗ и ПВ.
     * Array of offers with prices EA and LD.
     * Type: tns:OfferCheckinCheckoutPrices
     *
     * @var OfferCheckinCheckoutPrices[]
     */
    public $offerPrices = [];

    /**
     * @return bool
     */
    public function hasOfferPrices()
    {
        return count($this->offerPrices) > 0;
    }

    /**
     * @return OfferCheckinCheckoutPrices[]
     */
    public function getOfferPrices()
    {
        return $this->offerPrices;
    }

    /**
     * @param OfferCheckinCheckoutPrices $offerPrices
     */
    public function addOfferPrices($offerPrices)
    {
        $this->offerPrices[] = $offerPrices;
    }
}
