<?php

namespace Bronevik\HotelsConnector\Element;

class Tax
{
    /**
     * Тип сбора
     * The type of fee
     *
     * @var string
     */
    public $type;

    /**
     * Величина сбора
     * The amount of fee
     *
     * @var float
     */
    public $amount;

    /**
     * Валюта оплаты
     * The payment fee
     *
     * @var string
     */
    public $currency;

    /**
     * Включен ли сбор в стоимость предложения
     * Is the fee included in the price of offer
     *
     * @var boolean
     */
    public $included;

    /**
     * Комментарии
     * An information about taxes
     *
     * @var string
     */
    public $comment;

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param float $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
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
     * @param boolean $included
     */
    public function setIncluded($included)
    {
        $this->included = $included;
    }

    /**
     * @return boolean
     */
    public function getIncluded()
    {
        return $this->included;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
}
