<?php

namespace Bronevik\HotelsConnector\Element;

class GetHotelOfferRequest extends BaseRequest
{
    /**
     * @var string[]
     */
    public $offerCode = [];

    /**
     * @see SkipElementTypes::$availableSkipElementsForGetHotelOffer
     * @var SkipElements
     */
    public $skipElements;

    /**
     * @return bool
     */
    public function hasOfferCode()
    {
        return count($this->offerCode) > 0;
    }

    /**
     * @return string[]
     */
    public function getOfferCode()
    {
        return $this->offerCode;
    }

    /**
     * @param string $offerCode
     */
    public function addOfferCode($offerCode)
    {
        $this->offerCode[] = $offerCode;
    }

    /**
     * @param SkipElements $skipElements
     */
    public function setSkipElements($skipElements)
    {
        $this->skipElements = $skipElements;
    }

    /**
     * @return SkipElements
     */
    public function getSkipElements()
    {
        return $this->skipElements;
    }
}
