<?php

namespace Bronevik\HotelsConnector\Element;

class GetHotelOfferRequest extends BaseRequest
{
    /**
     * @var string[]
     */
    public $offerCode = [];

    /**
     * @var SkipElements
     */
    public $skipElements;

    public function __construct()
    {
        parent::__construct();
        $this->skipElements = new SkipElements();
    }

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
     * @return SkipElements
     */
    public function getSkipElements()
    {
        return $this->skipElements;
    }

    /**
     * @param SkipElements $skipElements
     */
    public function setSkipElements($skipElements)
    {
        $this->skipElements = $skipElements;
    }
}
