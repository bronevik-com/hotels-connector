<?php

namespace Bronevik\HotelsConnector\Element;

class CategoryCertificate
{
    /**
     * Номер сертификата.
     * Certificate Number.
     *
     * @var string
     */
    public $number;

    /**
     * Срок действия сертификата.
     * Validity of the certificate.
     *
     * @var string
     */
    public $endDate;

    /**
     * @param string $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
}
