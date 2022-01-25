<?php

namespace Bronevik\HotelsConnector\Element;

class HotelOffer extends BaseOffer
{
    /**
     * Код предложения
     * The offer code
     *
     * @var string
     */
    public $code;

    /**
     * Детализация стоимости
     * The offer price details
     *
     * @var PriceDetails
     */
    public $priceDetails;

    /**
     * Дополнительные сборы при заселении
     * The additional fees at check-in
     *
     * @var Taxes
     */
    public $taxes;

    /**
     * Валюта оплаты
     * The payment currency
     *
     * @var string
     */
    public $currency;

    /**
     * Возможность мгновенного подтверждения
     * Whether immediate confirmation is possible
     *
     * @var boolean
     */
    public $immediateConfirmation;

    /**
     * ​Элемент для работы метапоисковых систем
     * The element for metasearch engines
     *
     * @var string | null
     */
    public $deepLink;

    /**
     * Наличие окна в номере.
     * The presence of a window in the room.
     *
     * @var boolean
     */
    public $roomWithWindow;

    /**
     * Ежедневная детализация стоимости проживания
     * The detailed daily cost of accommodation
     *
     * @var DailyPrices | null
     */
    public $dailyPrices;

    /**
     * Правила предоставления предложения
     * A policies of granting current offer
     *
     * @var OfferPolicies
     */
    public $offerPolicies;

    public function __construct()
    {
        parent::__construct();
        $this->priceDetails  = new PriceDetails();
        $this->dailyPrices   = new DailyPrices();
        $this->offerPolicies = new OfferPolicies();
        $this->taxes         = new Taxes();
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param PriceDetails $priceDetails
     */
    public function setPriceDetails($priceDetails)
    {
        $this->priceDetails = $priceDetails;
    }

    /**
     * @return PriceDetails
     */
    public function getPriceDetails()
    {
        return $this->priceDetails;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param boolean $immediateConfirmation
     */
    public function setImmediateConfirmation($immediateConfirmation)
    {
        $this->immediateConfirmation = $immediateConfirmation;
    }

    /**
     * @return boolean
     */
    public function getImmediateConfirmation()
    {
        return $this->immediateConfirmation;
    }

    /**
     * @param string | null $deepLink
     */
    public function setDeepLink($deepLink)
    {
        $this->deepLink = $deepLink;
    }

    /**
     * @return string | null
     */
    public function getDeepLink()
    {
        return $this->deepLink;
    }

    /**
     * @param boolean $roomWithWindow
     */
    public function setRoomWithWindow($roomWithWindow)
    {
        $this->roomWithWindow = $roomWithWindow;
    }

    /**
     * @return boolean
     */
    public function getRoomWithWindow()
    {
        return $this->roomWithWindow;
    }

    /**
     * @param DailyPrices | null $dailyPrices
     */
    public function setDailyPrices($dailyPrices)
    {
        $this->dailyPrices = $dailyPrices;
    }

    /**
     * @return DailyPrices | null
     */
    public function getDailyPrices()
    {
        return $this->dailyPrices;
    }

    /**
     * @param OfferPolicies $offerPolicies
     */
    public function setOfferPolicies($offerPolicies)
    {
        $this->offerPolicies = $offerPolicies;
    }

    /**
     * @return OfferPolicies
     */
    public function getOfferPolicies()
    {
        return $this->offerPolicies;
    }

    /**
     * @return Taxes
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * @param Taxes $taxes
     */
    public function setTaxes($taxes)
    {
        $this->taxes = $taxes;
    }
}
