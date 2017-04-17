<?php
namespace Bronevik\HotelsConnector\Element;

class PriceDetails
{
    /**
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $vatApplicable = null;

    /**
     * Type: tns:HotelPriceDetails
     * 
     * @var \Bronevik\HotelsConnector\Element\HotelPriceDetails
     */
    public $hotel = null;

    /**
     * Type: tns:ClientPriceDetails
     * 
     * @var \Bronevik\HotelsConnector\Element\ClientPriceDetails
     */
    public $client = null;

    /**
     * 
     */
    public function __construct()
    {
        $this->hotel = new \Bronevik\HotelsConnector\Element\HotelPriceDetails;
        $this->client = new \Bronevik\HotelsConnector\Element\ClientPriceDetails;
    }

    /**
     * 
     * @param boolean $vatApplicable 
     */
    public function setVatApplicable($vatApplicable)
    {
        $this->vatApplicable = $vatApplicable;
    }

    /**
     * 
     * @return boolean
     */
    public function getVatApplicable()
    {
        return $this->vatApplicable;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\HotelPriceDetails $hotel 
     */
    public function setHotel($hotel)
    {
        $this->hotel = $hotel;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\HotelPriceDetails
     */
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\ClientPriceDetails $client 
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\ClientPriceDetails
     */
    public function getClient()
    {
        return $this->client;
    }
}

