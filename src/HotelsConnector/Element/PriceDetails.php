<?php

namespace Bronevik\HotelsConnector\Element;

class PriceDetails
{
    /**
     * Применим ли к отелю НДС
     * Whether VAT is applicable
     *
     * @var boolean
     */
    public $vatApplicable;

    /**
     * Детализация отельной стоимости
     * Detailed hotel prices
     *
     * @var HotelPriceDetails
     */
    public $hotel;

    /**
     * Детализация клиентской стоимости
     * The detailed client prices
     *
     * @var ClientPriceDetails
     */
    public $client;

    public function __construct()
    {
        $this->hotel  = new HotelPriceDetails();
        $this->client = new ClientPriceDetails();
    }

    /**
     * @param boolean $vatApplicable
     */
    public function setVatApplicable($vatApplicable)
    {
        $this->vatApplicable = $vatApplicable;
    }

    /**
     * @return boolean
     */
    public function getVatApplicable()
    {
        return $this->vatApplicable;
    }

    /**
     * @param HotelPriceDetails $hotel
     */
    public function setHotel($hotel)
    {
        $this->hotel = $hotel;
    }

    /**
     * @return HotelPriceDetails
     */
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * @param ClientPriceDetails $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return ClientPriceDetails
     */
    public function getClient()
    {
        return $this->client;
    }
}
