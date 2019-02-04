<?php
namespace Bronevik\HotelsConnector\Element;

/**
 * Запрос на поиск предложений по определённому городу
 * The offers search by the city
 * 
 */
class SearchHotelOffersRequest extends BaseRequest
{
    /**
     * Идентификатор города, по которому будет идти поиск
     * The city id for search
     * Type: xsd:int
     * 
     * @var int
     */
    public $cityId = null;

    /**
     * @deprecated
     *                                         Идентификатор отеля, по которому будет идти поиск
     * @deprecated
     *                                         The hotel id for search
     * Type: xsd:int
     * 
     * @var int
     */
    public $hotelId = null;

    /**
     * Идентификаторы отелей, по которым будет идти поиск
     * The hotel ids for search
     * Type: tns:HotelIdsList
     * 
     * @var \Bronevik\HotelsConnector\Element\HotelIdsList
     */
    public $hotelIdsList = null;

    /**
     * Дата заезда
     * The date of arrival
     * Type: xsd:date
     * 
     * @var date
     */
    public $arrivalDate = null;

    /**
     * Дата выезда
     * The date of departure
     * Type: xsd:date
     * 
     * @var date
     */
    public $departureDate = null;

    /**
     * Валюта расчета
     * The payment currency
     * Type: tns:Currency
     * 
     * @var string
     */
    public $currency = null;

    /**
     * Критерии поиска
     * The search criteria
     * Type: tns:SearchOfferCriterion
     * 
     * @var \Bronevik\HotelsConnector\Element\SearchOfferCriterion[]
     */
    public $searchCriteria = [];

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
        $this->hotelIdsList = new \Bronevik\HotelsConnector\Element\HotelIdsList;
        $this->skipElements = new \Bronevik\HotelsConnector\Element\SkipElements;
    }

    /**
     * 
     * @param int $cityId 
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
    }

    /**
     * 
     * @return int
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * 
     * @param int $hotelId 
     */
    public function setHotelId($hotelId)
    {
        $this->hotelId = $hotelId;
    }

    /**
     * 
     * @return int
     */
    public function getHotelId()
    {
        return $this->hotelId;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\HotelIdsList $hotelIdsList 
     */
    public function setHotelIdsList($hotelIdsList)
    {
        $this->hotelIdsList = $hotelIdsList;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\HotelIdsList
     */
    public function getHotelIdsList()
    {
        return $this->hotelIdsList;
    }

    /**
     * 
     * @param date $arrivalDate 
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;
    }

    /**
     * 
     * @return date
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * 
     * @param date $departureDate 
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;
    }

    /**
     * 
     * @return date
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * 
     * @param string $currency 
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * 
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * 
     * @return bool
     */
    public function hasSearchCriteria()
    {
        return count($this->searchCriteria) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\SearchOfferCriterion[]
     */
    public function getSearchCriteria()
    {
        return $this->searchCriteria;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\SearchOfferCriterion $searchCriteria 
     */
    public function addSearchCriteria($searchCriteria)
    {
        $this->searchCriteria[] = $searchCriteria;
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

