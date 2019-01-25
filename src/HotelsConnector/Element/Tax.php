<?php
namespace Bronevik\HotelsConnector\Element;

class Tax
{
    /**
     * Тип сбора
     * The type of fee
     * Type: xsd:string
     * 
     * @var string
     */
    public $type = null;

    /**
     * Величина сбора
     * The amount of fee
     * Type: xsd:float
     * 
     * @var float
     */
    public $amount = null;

    /**
     * Валюта оплаты
     * The payment fee
     * Type: xsd:string
     * 
     * @var string
     */
    public $currency = null;

    /**
     * Включен ли сбор в стоимость предложения
     * Is the fee included in the price of offer
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $included = null;

    /**
     * Комментарии
     * An information about taxes
     * Type: xsd:string
     * 
     * @var string
     */
    public $comment = null;

    /**
     * 
     * @param string $type 
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * 
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 
     * @param float $amount 
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
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

    /**
     * 
     * @param boolean $included 
     */
    public function setIncluded($included)
    {
        $this->included = $included;
    }

    /**
     * 
     * @return boolean
     */
    public function getIncluded()
    {
        return $this->included;
    }

    /**
     * 
     * @param string $comment 
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * 
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
}

