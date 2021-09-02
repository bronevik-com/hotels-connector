<?php

namespace Bronevik\HotelsConnector\Element;

class ClientPriceDetails
{
    /**
     * Включен ли НДС в клиентскую стоимость
     * Whether VAT is included in the client’s price
     *
     * @var boolean
     */
    public $vatIncluded;

    /**
     * Информация о комиссии
     * The information about commission
     *
     * @var DetailedPrice
     */
    public $commission;

    /**
     * Брутто-стоимость
     * The gross-cost value
     *
     * @var DetailedPrice
     */
    public $gross;

    /**
     * Цены в валюте клиента.
     * Prices in client currency.
     *
     * @var CurrencyPriceDetails
     */
    public $clientCurrency;

    /**
     * Цены в валюте отеля.
     * Prices in hotel currency.
     *
     * @var CurrencyPriceDetails
     */
    public $hotelCurrency;

    /**
     * Нетто-стоимость
     * The net-cost value
     *
     * @var DetailedPrice
     */
    public $net;

    public function __construct()
    {
        $this->commission = new DetailedPrice();
        $this->gross      = new DetailedPrice();
        $this->net        = new DetailedPrice();
    }

    /**
     * @param boolean $vatIncluded
     */
    public function setVatIncluded($vatIncluded)
    {
        $this->vatIncluded = $vatIncluded;
    }

    /**
     * @return boolean
     */
    public function getVatIncluded()
    {
        return $this->vatIncluded;
    }

    /**
     * @param DetailedPrice $commission
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;
    }

    /**
     * @return DetailedPrice
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * @param DetailedPrice $gross
     */
    public function setGross($gross)
    {
        $this->gross = $gross;
    }

    /**
     * @return DetailedPrice
     */
    public function getGross()
    {
        return $this->gross;
    }

    /**
     * @param DetailedPrice $net
     */
    public function setNet($net)
    {
        $this->net = $net;
    }

    /**
     * @return DetailedPrice
     */
    public function getNet()
    {
        return $this->net;
    }

    /**
     * @return CurrencyPriceDetails
     */
    public function getClientCurrency()
    {
        return $this->clientCurrency;
    }

    /**
     * @param CurrencyPriceDetails $clientCurrency
     */
    public function setClientCurrency($clientCurrency)
    {
        $this->clientCurrency = $clientCurrency;
    }

    /**
     * @return CurrencyPriceDetails
     */
    public function getHotelCurrency()
    {
        return $this->hotelCurrency;
    }

    /**
     * @param CurrencyPriceDetails $hotelCurrency
     */
    public function setHotelCurrency($hotelCurrency)
    {
        $this->hotelCurrency = $hotelCurrency;
    }
}
