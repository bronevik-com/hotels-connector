<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Запрос на поиск предложений по определённому городу
 * The offers search by the city
 */
class SearchHotelOffersRequest extends BaseRequest
{
    /**
     * Идентификатор города, по которому будет идти поиск
     * The city id for search
     *
     * @var int
     */
    public $cityId;

    /**
     * @deprecated
     * Идентификатор отеля, по которому будет идти поиск
     * The hotel id for search
     *
     * @var int
     */
    public $hotelId;

    /**
     * Идентификаторы отелей, по которым будет идти поиск
     * The hotel ids for search
     *
     * @var HotelIds
     */
    public $hotelIds;

    /**
     * Дата заезда
     * The date of arrival
     *
     * @var string
     */
    public $arrivalDate;

    /**
     * Дата выезда
     * The date of departure
     *
     * @var string
     */
    public $departureDate;

    /**
     * Валюта расчета
     * The payment currency
     *
     * @var string
     */
    public $currency;

    /**
     * Критерии поиска
     * The search criteria
     *
     * @var SearchOfferCriterion[]
     */
    public $searchCriteria = [];

    /**
     * @var bool
     */
    public $enableProfitShareRates = false;

    /**
     * @var SkipElements
     */
    public $skipElements;

    public function __construct()
    {
        parent::__construct();
        $this->hotelIds     = new HotelIds();
        $this->skipElements = new SkipElements();
    }

    /**
     * @return int
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param int $cityId
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
    }

    /**
     * @return int
     */
    public function getHotelId()
    {
        return $this->hotelId;
    }

    /**
     * @param int $hotelId
     */
    public function setHotelId($hotelId)
    {
        $this->hotelId = $hotelId;
    }

    /**
     * @return HotelIds
     */
    public function getHotelIds()
    {
        return $this->hotelIds;
    }

    /**
     * @param HotelIds $hotelIds
     */
    public function setHotelIds($hotelIds)
    {
        $this->hotelIds = $hotelIds;
    }

    /**
     * @return string
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * @param string $arrivalDate
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;
    }

    /**
     * @return string
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * @param string $departureDate
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return bool
     */
    public function hasSearchCriteria()
    {
        return count($this->searchCriteria) > 0;
    }

    /**
     * @return SearchOfferCriterion[]
     */
    public function getSearchCriteria()
    {
        return $this->searchCriteria;
    }

    /**
     * @param SearchOfferCriterion $searchCriteria
     */
    public function addSearchCriteria($searchCriteria)
    {
        $this->searchCriteria[] = $searchCriteria;
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
