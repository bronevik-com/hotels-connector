<?php
namespace Bronevik\HotelsConnector\Element;

class DetailedPrice
{
    /**
     * Type: xsd:float
     * 
     * @var float
     */
    public $price = null;

    /**
     * Сумма ндс
     * Type: xsd:float
     * 
     * @var float
     */
    public $vatAmount = null;

    /**
     * Валюта (трекхбуквенный код)
     * Type: xsd:string
     * 
     * @var string
     */
    public $currency = null;

    /**
     * 
     * @param float $price 
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * 
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * 
     * @param float $vatAmount 
     */
    public function setVatAmount($vatAmount)
    {
        $this->vatAmount = $vatAmount;
    }

    /**
     * 
     * @return float
     */
    public function getVatAmount()
    {
        return $this->vatAmount;
    }

    /**
     * 
     * @param string $currency 
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * 
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }
}

