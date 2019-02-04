<?php
namespace Bronevik\HotelsConnector\Element;

class GetHotelOfferRequest extends BaseRequest
{
    /**
     * Type: xsd:string
     * 
     * @var string[]
     */
    public $offerCode = [];

    /**
     * Type: tns:SkipElements
     * 
     * @var \Bronevik\HotelsConnector\Element\SkipElements
     */
    public $skipElements = null;

    /**
     * 
     */
    public function __construct()
    {
        $this->skipElements = new \Bronevik\HotelsConnector\Element\SkipElements;
    }

    /**
     * 
     * @return bool
     */
    public function hasOfferCode()
    {
        return count($this->offerCode) > 0;
    }

    /**
     * 
     * @return string[]
     */
    public function getOfferCode()
    {
        return $this->offerCode;
    }

    /**
     * 
     * @param string $offerCode 
     */
    public function addOfferCode($offerCode)
    {
        $this->offerCode[] = $offerCode;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\SkipElements $skipElements 
     */
    public function setSkipElements($skipElements)
    {
        $this->skipElements = $skipElements;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\SkipElements
     */
    public function getSkipElements()
    {
        return $this->skipElements;
    }
}

