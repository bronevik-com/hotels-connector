<?php

namespace Bronevik\HotelsConnector\Element;

class DetailedPrice
{
    /**
     * Стоимость
     * Cost
     *
     * @var float
     */
    public $price;

    /**
     * Сумма ндс
     * The VAT amount
     *
     * @var float
     */
    public $vatAmount;

    /**
     * Валюта (трекхбуквенный код)
     * The currency (three-letter code)
     *
     * @var string
     */
    public $currency;

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $vatAmount
     */
    public function setVatAmount($vatAmount)
    {
        $this->vatAmount = $vatAmount;
    }

    /**
     * @return float
     */
    public function getVatAmount()
    {
        return $this->vatAmount;
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
}
