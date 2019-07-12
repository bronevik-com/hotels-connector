<?php

namespace Bronevik\HotelsConnector\Element;

class OfferCodes
{
    /**
     * Массив кодов предложений.
     * Array of offer codes.
     *
     * @var string[]
     */
    public $offerCode = [];

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
}
