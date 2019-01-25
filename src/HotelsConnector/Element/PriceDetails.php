<?php
namespace Bronevik\HotelsConnector\Element;

class PriceDetails
{
    /**
     * Применим ли к отелю НДС
     * Whether VAT is applicable
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $vatApplicable = null;

    /**
     * Детализация отельной стоимости
     * Detailed hotel prices
     * Type: tns:HotelPriceDetails
     * 
     * @var \Bronevik\HotelsConnector\Element\HotelPriceDetails
     */
    public $hotel = null;

    /**
     * Детализация клиентской стоимости
     * The detailed client prices
     * Type: tns:ClientPriceDetails
     * 
     * @var \Bronevik\HotelsConnector\Element\ClientPriceDetails
     */
    public $client = null;

    /**
     * Дополнительные цены
     * The extra prices
     * Type: tns:NamedDetailedPrice
     * 
     * @var \Bronevik\HotelsConnector\Element\NamedDetailedPrice[]
     */
    public $extra = [];

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

    /**
     * 
     * @return bool
     */
    public function hasExtra()
    {
        return count($this->extra) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\NamedDetailedPrice[]
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\NamedDetailedPrice $extra 
     */
    public function addExtra($extra)
    {
        $this->extra[] = $extra;
    }
}

