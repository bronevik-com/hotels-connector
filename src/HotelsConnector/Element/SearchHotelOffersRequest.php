<?php

namespace Bronevik\HotelsConnector\Element;

use Bronevik\HotelsConnector\Enum\CurrencyCodes;
use Bronevik\HotelsConnector\Enum\SkipElementTypes;

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
     * Идентификаторы отелей, по которым будет идти поиск
     * The hotel ids for search
     *
     * @var HotelIds
     */
    public $hotelIds;

    /**
     * Координаты и радиус для поиска.
     * Coordinates and radius for search.
     *
     * @var GeoLocation
     */
    public $geolocation;

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
     * @see CurrencyCodes
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
     * @see SkipElementTypes::$availableSkipElementsForSearchHotelOffers
     * @var SkipElements
     */
    public $skipElements;

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
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param HotelIds $hotelIds
     */
    public function setHotelIds($hotelIds)
    {
        $this->hotelIds = $hotelIds;
    }

    /**
     * @return HotelIds
     */
    public function getHotelIds()
    {
        return $this->hotelIds;
    }

    /**
     * @param GeoLocation $geolocation
     */
    public function setGeolocation($geolocation)
    {
        $this->geolocation = $geolocation;
    }

    /**
     * @return GeoLocation
     */
    public function getGeolocation()
    {
        return $this->geolocation;
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
    public function getArrivalDate()
    {
        return $this->arrivalDate;
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
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * @param string $currency
     * @see CurrencyCodes
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
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
     * @param SkipElements $skipElements
     */
    public function setSkipElements($skipElements)
    {
        $this->skipElements = $skipElements;
    }

    /**
     * @return SkipElements
     */
    public function getSkipElements()
    {
        return $this->skipElements;
    }
}
