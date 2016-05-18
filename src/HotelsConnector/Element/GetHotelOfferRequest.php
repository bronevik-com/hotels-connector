<?php
namespace Bronevik\HotelsConnector\Element;

class GetHotelOfferRequest extends BaseRequest
{
    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $offerCode = null;

    /**
     * 
     * @param string $offerCode 
     */
    public function setOfferCode($offerCode)
    {
        $this->offerCode = $offerCode;
    }

    /**
     * 
     * @return string
     */
    public function getOfferCode()
    {
        return $this->offerCode;
    }
}

