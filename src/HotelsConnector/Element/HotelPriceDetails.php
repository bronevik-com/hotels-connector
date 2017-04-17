<?php
namespace Bronevik\HotelsConnector\Element;

class HotelPriceDetails
{
    /**
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $vatIncluded = null;

    /**
     * 
     * @param boolean $vatIncluded 
     */
    public function setVatIncluded($vatIncluded)
    {
        $this->vatIncluded = $vatIncluded;
    }

    /**
     * 
     * @return boolean
     */
    public function getVatIncluded()
    {
        return $this->vatIncluded;
    }
}

