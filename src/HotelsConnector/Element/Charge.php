<?php

namespace Bronevik\HotelsConnector\Element;

class Charge
{
    /**
     * Название начисления.
     *
     * @var string
     */
    public $name;

    /**
     * Размер начисления.
     *
     * @var float
     */
    public $amount;

    /**
     * Код валюты ISO 4217.
     *
     * @var string
     */
    public $currency;

    /**
     * Включено ли начисление в стоимость.
     *
     * @var bool
     */
    public $included;

    /**
     * Описание начисления.
     *
     * @var string|null
     */
    public $description;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return bool
     */
    public function getIncluded()
    {
        return $this->included;
    }

    /**
     * @param bool $included
     */
    public function setIncluded($included)
    {
        $this->included = $included;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

}
