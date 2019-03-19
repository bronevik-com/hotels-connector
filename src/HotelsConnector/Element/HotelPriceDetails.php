<?php

namespace Bronevik\HotelsConnector\Element;

class HotelPriceDetails
{
    /**
     * Включен ли НДС в отельную стоимость
     * Whether VAT is included in the property’s price
     *
     * @var boolean
     */
    public $vatIncluded;

    /**
     * @param boolean $vatIncluded
     */
    public function setVatIncluded($vatIncluded)
    {
        $this->vatIncluded = $vatIncluded;
    }

    /**
     * @return boolean
     */
    public function getVatIncluded()
    {
        return $this->vatIncluded;
    }
}
