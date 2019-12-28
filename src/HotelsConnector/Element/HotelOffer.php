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
     * Флаг наличия lhp-цен в предложении
     * Specifies LHP-rate in the offer
     *
     * @var boolean
     * @deprecated
     */
    public $lhp;

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
     * @var Tax[]
     */
    public $taxes = [];

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
     * Количество гостей, которых можно разместить в номере
     * The basic room capacity
     *
     * @deprecated
     * @var int
     */
    public $roomCapacity;

    /**
     * ​Элемент для работы метапоисковых систем
     * The element for metasearch engines
     *
     * @var string
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
     * @var DailyPrices
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
     * @param boolean $lhp
     */
    public function setLhp($lhp)
    {
        $this->lhp = $lhp;
    }

    /**
     * @return boolean
     */
    public function getLhp()
    {
        return $this->lhp;
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
     * @return bool
     */
    public function hasTaxes()
    {
        return count($this->taxes) > 0;
    }

    /**
     * @return Tax[]
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * @param Tax $taxes
     */
    public function addTaxes($taxes)
    {
        $this->taxes[] = $taxes;
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
     * @param int $roomCapacity
     */
    public function setRoomCapacity($roomCapacity)
    {
        $this->roomCapacity = $roomCapacity;
    }

    /**
     * @return int
     */
    public function getRoomCapacity()
    {
        return $this->roomCapacity;
    }

    /**
     * @param string $deepLink
     */
    public function setDeepLink($deepLink)
    {
        $this->deepLink = $deepLink;
    }

    /**
     * @return string
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
     * @param DailyPrices $dailyPrices
     */
    public function setDailyPrices($dailyPrices)
    {
        $this->dailyPrices = $dailyPrices;
    }

    /**
     * @return DailyPrices
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
}
