<?php

namespace Bronevik\HotelsConnector\Element;

class CardDetails
{
    /**
     * Номер карты.
     * Card number.
     *
     * @var string
     */
    public $pan;

    /**
     * Держатель карты.
     * Card holder.
     *
     * @var string
     */
    public $cardholder;

    /**
     * Месяц истечения карты.
     * expiration Month.
     *
     * @var string
     */
    public $expirationMonth;

    /**
     * Год истечения карты.
     * expiration Year.
     *
     * @var string
     */
    public $expirationYear;

    /**
     * CVV/CVC
     *
     * @var string
     */
    public $CVV;

    /**
     * @param string $pan
     */
    public function setPan($pan)
    {
        $this->pan = $pan;
    }

    /**
     * @return string
     */
    public function getPan()
    {
        return $this->pan;
    }

    /**
     * @param string $cardholder
     */
    public function setCardholder($cardholder)
    {
        $this->cardholder = $cardholder;
    }

    /**
     * @return string
     */
    public function getCardholder()
    {
        return $this->cardholder;
    }

    /**
     * @param string $expirationMonth
     */
    public function setExpirationMonth($expirationMonth)
    {
        $this->expirationMonth = $expirationMonth;
    }

    /**
     * @return string
     */
    public function getExpirationMonth()
    {
        return $this->expirationMonth;
    }

    /**
     * @param string $expirationYear
     */
    public function setExpirationYear($expirationYear)
    {
        $this->expirationYear = $expirationYear;
    }

    /**
     * @return string
     */
    public function getExpirationYear()
    {
        return $this->expirationYear;
    }

    /**
     * @param string $CVV
     */
    public function setCVV($CVV)
    {
        $this->CVV = $CVV;
    }

    /**
     * @return string
     */
    public function getCVV()
    {
        return $this->CVV;
    }
}
