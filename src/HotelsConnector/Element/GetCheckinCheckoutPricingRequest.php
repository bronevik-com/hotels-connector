<?php

namespace Bronevik\HotelsConnector\Element;

use Bronevik\HotelsConnector\Enum\CurrencyCodesEnum;

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
     * @var string
     * @see CurrencyCodesEnum
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
}
