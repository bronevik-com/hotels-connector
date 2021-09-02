<?php

namespace Bronevik\HotelsConnector\Element;

use Bronevik\HotelsConnector\Enum\CurrencyCodes;

class GetCheckinCheckoutPricingRequest extends BaseRequest
{
    /**
     * Коды предложений, по которым будет осуществлен поиск.
     * The offers codes that will be searched.
     *
     * @var OfferCodes
     */
    public $offerCodes = null;

    /**
     * Валюта расчета
     * The payment currency
     *
     * @var string
     * @see CurrencyCodes
     */
    public $currency;

    public function __construct()
    {
        parent::__construct();
        $this->offerCodes = new OfferCodes();
    }

    /**
     * @param OfferCodes $offerCodes
     */
    public function setOfferCodes($offerCodes)
    {
        $this->offerCodes = $offerCodes;
    }

    /**
     * @return OfferCodes
     */
    public function getOfferCodes()
    {
        return $this->offerCodes;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @see CurrencyCodes
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }
}
