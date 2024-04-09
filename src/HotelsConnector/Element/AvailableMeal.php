<?php

namespace Bronevik\HotelsConnector\Element;

use Bronevik\HotelsConnector\Enum\VatPercents;

class AvailableMeal
{
    /**
     * Идентификатор услуги питания
     * The meal service id
     *
     * @var int
     */
    public $id;

    /**
     * Включена ли услуга в предложение
     * Whether the service is included in the offer
     *
     * @var boolean
     */
    public $included;

    /**
     * Детализация услуги питания.
     * Detailing of food service.
     *
     * @var ClientPriceDetails
     */
    public $priceDetails;

    /**
     * Ставка НДС.
     * VAT percentage rate.
     *
     * @var int
     * @see VatPercents
     */
    public $VATPercent;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
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
     * @param ClientPriceDetails $priceDetails
     */
    public function setPriceDetails($priceDetails)
    {
        $this->priceDetails = $priceDetails;
    }

    /**
     * @return ClientPriceDetails
     */
    public function getPriceDetails()
    {
        return $this->priceDetails;
    }

    /**
     * @param int $VATPercent
     */
    public function setVATPercent($VATPercent)
    {
        $this->VATPercent = $VATPercent;
    }

    /**
     * @return int
     */
    public function getVATPercent()
    {
        return $this->VATPercent;
    }
}
