<?php
namespace Bronevik\HotelsConnector\Element;

/**
 * Ответ на запрос по поиску предложений
 * The search hotel offers response
 * 
 */
class SearchHotelOffersResponse extends BaseResponse
{
    /**
     * Type: tns:Hotels
     * 
     * @var \Bronevik\HotelsConnector\Element\Hotels
     */
    public $hotels = null;

    /**
     * 
     */
    public function __construct()
    {
        $this->hotels = new \Bronevik\HotelsConnector\Element\Hotels;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\Hotels $hotels 
     */
    public function setHotels($hotels)
    {
        $this->hotels = $hotels;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\Hotels
     */
    public function getHotels()
    {
        return $this->hotels;
    }
}

