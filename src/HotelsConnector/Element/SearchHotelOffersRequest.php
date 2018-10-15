<?php
namespace Bronevik\HotelsConnector\Element;

/**
 * Запрос на поиск предложений по определённому городу
 * 
 */
class SearchHotelOffersRequest extends BaseRequest
{
    /**
     * Идентификатор города, по которому будет идти поиск
     * Type: xsd:int
     *
     * @var int
     */
    public $cityId = null;

    /**
     * Идентификатор отеля, по которому будет идти поиск
     * Type: xsd:int
     *
     * @var int
     */
    public $hotelId = null;

    /**
     * Дата заезда
     * Type: xsd:date
     *
     * @var string
     */
    public $arrivalDate = null;

    /**
     * Дата выезда
     * Type: xsd:date
     *
     * @var string
     */
    public $departureDate = null;

    /**
     * Валюта расчёта
     * Type: tns:Currency
     *
     * @var string
     */
    public $currency = null;

    /**
     * Критерии поиска
     * Type: tns:SearchOfferCriterion
     * 
     * @var \Bronevik\HotelsConnector\Element\SearchOfferCriterion[]
     */
    public $searchCriteria = [];

    /**
     * @var bool 
     */
    public $enableProfitShareRates = false;

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
     * @param string $arrivalDate
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;
    }

    /**
     *
     * @return string
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     *
     * @param string $departureDate
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;
    }

    /**
     *
     * @return string
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
}

