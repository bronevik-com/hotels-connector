<?php


namespace Bronevik\HotelsConnector\Element;

class CurrencyPriceDetails
{
    /**
     * Информация о комиссии
     * The information about commission
     *
     * @var DetailedPrice
     */
    public $commission;

    /**
     * Нетто-стоимость
     * The net-cost value
     *
     * @var DetailedPrice
     */
    public $net;

    /**
     * Брутто-стоимость
     * The gross-cost value
     *
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

    /**
     * @return NamedDetailedPrice[]
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * @param NamedDetailedPrice[] $extra
     */
    public function setExtra($extra)
    {
        $this->extra = $extra;
    }
}
