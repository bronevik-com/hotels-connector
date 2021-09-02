<?php


namespace Bronevik\HotelsConnector\Element;

class CurrencyPriceDetails
{
    /**
     * @var DetailedPrice
     */
    public $commission;

    /**
     * @var DetailedPrice
     */
    public $net;

    /**
     * @var DetailedPrice
     */
    public $gross;

    /**
     * Дополнительные цены
     * The extra prices
     *
     * @var NamedDetailedPrice[]
     */
    public $extra = [];

    /**
     * @return DetailedPrice
     */
    public function getCommission()
    {
        return $this->commission;
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
    public function getNet()
    {
        return $this->net;
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
    public function getGross()
    {
        return $this->gross;
    }

    /**
     * @param DetailedPrice $gross
     */
    public function setGross($gross)
    {
        $this->gross = $gross;
    }
}
