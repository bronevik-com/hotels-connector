<?php

namespace Bronevik;

use Bronevik\HotelsConnector\Enum\Currencies;
use Bronevik\HotelsConnector\Enum\Endpoints;
use Bronevik\HotelsConnector\Element as Element;


class HotelsConnector
{
    /**
     * Клиент
     *
     * @var \SoapClient
     */
    public $soapClient;

    /**
     * Режим отладки
     *
     * @var bool
     */
    protected $debugMode = false;

    /**
     * Данные авторизации
     *
     * @var Element\Credentials
     */
    protected $credentials;

    /**
     * Язык
     *
     * @var string
     */
    protected $language;

    /**
     * @param string $endpoint
     * @param bool $debugMode
     */
    public function __construct($endpoint, $debugMode = false)
    {
        $this->debugMode = (bool)$debugMode;
        $this->createSoapClient($endpoint);
    }

    /**
     *
     * @return boolean
     */
    protected function isDebugMode()
    {
        return $this->debugMode;
    }

    /**
     * @param string $endpoint
     */
    protected function createSoapClient($endpoint)
    {
        $this->soapClient = new \SoapClient(
            Endpoints::$wsdlUrls[$endpoint],
            [
                'location'    => $endpoint,
                'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE,
                'cache_wsdl'  => $this->isDebugMode() ? WSDL_CACHE_NONE : WSDL_CACHE_BOTH,
                'trace'       => $this->isDebugMode(),
                'features'    => SOAP_SINGLE_ELEMENT_ARRAYS,
                'classmap'    => [
                    'Amenity'                               => 'Bronevik\HotelsConnector\Element\Amenity',
                    'AvailableAmenity'                      => 'Bronevik\HotelsConnector\Element\AvailableAmenity',
                    'AvailableMeal'                         => 'Bronevik\HotelsConnector\Element\AvailableMeal',
                    'BaseRequest'                           => 'Bronevik\HotelsConnector\Element\BaseRequest',
                    'BaseResponse'                          => 'Bronevik\HotelsConnector\Element\BaseResponse',
                    'BreakfastInfo'                         => 'Bronevik\HotelsConnector\Element\BreakfastInfo',
                    'CancelOrderRequest'                    => 'Bronevik\HotelsConnector\Element\CancelOrderRequest',
                    'CancelOrderResponse'                   => 'Bronevik\HotelsConnector\Element\CancelOrderResponse',
                    'CancellationPolicy'                    => 'Bronevik\HotelsConnector\Element\CancellationPolicy',
                    'City'                                  => 'Bronevik\HotelsConnector\Element\City',
                    'Country'                               => 'Bronevik\HotelsConnector\Element\Country',
                    'CreateOrderRequest'                    => 'Bronevik\HotelsConnector\Element\CreateOrderRequest',
                    'CreateOrderResponse'                   => 'Bronevik\HotelsConnector\Element\CreateOrderResponse',
                    'Credentials'                           => 'Bronevik\HotelsConnector\Element\Credentials',
                    'DailyPrice'                            => 'Bronevik\HotelsConnector\Element\DailyPrice',
                    'FaultDetail'                           => 'Bronevik\HotelsConnector\Element\FaultDetail',
                    'GetAmenitiesRequest'                   => 'Bronevik\HotelsConnector\Element\GetAmenitiesRequest',
                    'GetAmenitiesResponse'                  => 'Bronevik\HotelsConnector\Element\GetAmenitiesResponse',
                    'GetCitiesRequest'                      => 'Bronevik\HotelsConnector\Element\GetCitiesRequest',
                    'GetCitiesResponse'                     => 'Bronevik\HotelsConnector\Element\GetCitiesResponse',
                    'GetCountriesRequest'                   => 'Bronevik\HotelsConnector\Element\GetCountriesRequest',
                    'GetCountriesResponse'                  => 'Bronevik\HotelsConnector\Element\GetCountriesResponse',
                    'GetHotelInfoRequest'                   => 'Bronevik\HotelsConnector\Element\GetHotelInfoRequest',
                    'GetHotelInfoResponse'                  => 'Bronevik\HotelsConnector\Element\GetHotelInfoResponse',
                    'GetHotelOfferRequest'                  => 'Bronevik\HotelsConnector\Element\GetHotelOfferRequest',
                    'GetHotelOfferResponse'                 => 'Bronevik\HotelsConnector\Element\GetHotelOfferResponse',
                    'GetMealsRequest'                       => 'Bronevik\HotelsConnector\Element\GetMealsRequest',
                    'GetMealsResponse'                      => 'Bronevik\HotelsConnector\Element\GetMealsResponse',
                    'GetOrderRequest'                       => 'Bronevik\HotelsConnector\Element\GetOrderRequest',
                    'GetOrderResponse'                      => 'Bronevik\HotelsConnector\Element\GetOrderResponse',
                    'Hotel'                                 => 'Bronevik\HotelsConnector\Element\Hotel',
                    'HotelAmenity'                          => 'Bronevik\HotelsConnector\Element\HotelAmenity',
                    'HotelOffer'                            => 'Bronevik\HotelsConnector\Element\HotelOffer',
                    'HotelOfferCancellationPolicy'          => 'Bronevik\HotelsConnector\Element\HotelOfferCancellationPolicy',
                    'HotelRoom'                             => 'Bronevik\HotelsConnector\Element\HotelRoom',
                    'HotelWithInfo'                         => 'Bronevik\HotelsConnector\Element\HotelWithInfo',
                    'HotelWithOffers'                       => 'Bronevik\HotelsConnector\Element\HotelWithOffers',
                    'Image'                                 => 'Bronevik\HotelsConnector\Element\Image',
                    'Meal'                                  => 'Bronevik\HotelsConnector\Element\Meal',
                    'Order'                                 => 'Bronevik\HotelsConnector\Element\Order',
                    'OrderService'                          => 'Bronevik\HotelsConnector\Element\OrderService',
                    'OrderServiceAccommodation'             => 'Bronevik\HotelsConnector\Element\OrderServiceAccommodation',
                    'PingRequest'                           => 'Bronevik\HotelsConnector\Element\PingRequest',
                    'PingResponse'                          => 'Bronevik\HotelsConnector\Element\PingResponse',
                    'SearchHotelOffersRequest'              => 'Bronevik\HotelsConnector\Element\SearchHotelOffersRequest',
                    'SearchHotelOffersResponse'             => 'Bronevik\HotelsConnector\Element\SearchHotelOffersResponse',
                    'SearchOfferCriterion'                  => 'Bronevik\HotelsConnector\Element\SearchOfferCriterion',
                    'SearchOfferCriterionBreakfastIncluded' => 'Bronevik\HotelsConnector\Element\SearchOfferCriterionBreakfastIncluded',
                    'SearchOfferCriterionHotelCategory'     => 'Bronevik\HotelsConnector\Element\SearchOfferCriterionHotelCategory',
                    'SearchOfferCriterionHotelName'         => 'Bronevik\HotelsConnector\Element\SearchOfferCriterionHotelName',
                    'SearchOfferCriterionNumberOfGuests'    => 'Bronevik\HotelsConnector\Element\SearchOfferCriterionNumberOfGuests',
                    'SearchOfferCriterionOnlyOnline'        => 'Bronevik\HotelsConnector\Element\SearchOfferCriterionOnlyOnline',
                    'SearchOrderCriterion'                  => 'Bronevik\HotelsConnector\Element\SearchOrderCriterion',
                    'SearchOrderCriterionArrivalDate'       => 'Bronevik\HotelsConnector\Element\SearchOrderCriterionArrivalDate',
                    'SearchOrderCriterionCreateDate'        => 'Bronevik\HotelsConnector\Element\SearchOrderCriterionCreateDate',
                    'SearchOrderCriterionGuest'             => 'Bronevik\HotelsConnector\Element\SearchOrderCriterionGuest',
                    'SearchOrderCriterionOrderId'           => 'Bronevik\HotelsConnector\Element\SearchOrderCriterionOrderId',
                    'SearchOrderCriterionServiceId'         => 'Bronevik\HotelsConnector\Element\SearchOrderCriterionServiceId',
                    'SearchOrdersRequest'                   => 'Bronevik\HotelsConnector\Element\SearchOrdersRequest',
                    'SearchOrdersResponse'                  => 'Bronevik\HotelsConnector\Element\SearchOrdersResponse',
                    'Service'                               => 'Bronevik\HotelsConnector\Element\Service',
                    'ServiceAccommodation'                  => 'Bronevik\HotelsConnector\Element\ServiceAccommodation',
                    'UpdateOrderRequest'                    => 'Bronevik\HotelsConnector\Element\UpdateOrderRequest',
                    'UpdateOrderResponse'                   => 'Bronevik\HotelsConnector\Element\UpdateOrderResponse',
                ],
            ]);
    }

    public function getLastResponse()
    {
        return $this->soapClient->__getLastResponse();
    }

    public function getLastResponceHeaders()
    {
        return $this->soapClient->__getLastResponseHeaders();
    }

    /**
     * Установка данных для авторизации
     *
     * @param string $login
     * @param string $password
     * @param string $clientKey
     */
    public function setCredentials($login, $password, $clientKey)
    {
        $this->credentials = new Element\Credentials();

        $this->credentials->setLogin($login);
        $this->credentials->setPassword($password);
        $this->credentials->setClientKey($clientKey);
    }

    /**
     * Установка языка
     *
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * Проверка связи с сервером
     *
     * @param string $data
     * @return string $data;
     */
    public function ping($data)
    {
        $request = new Element\PingRequest();
        $this->fillRequest($request);

        $request->setData($data);

        return $this->soapClient->ping($request)->data;
    }

    /**
     * Получение списка стран
     *
     * @return Element\Meal[]
     */
    public function getMeals()
    {
        $request = new Element\GetMealsRequest();
        $this->fillRequest($request);

        return $this->soapClient->getMeals($request)->meals;
    }
    
    /**
     * Получение списка стран
     *
     * @return Element\Country[]
     */
    public function getCountries()
    {
        $request = new Element\GetCountriesRequest();
        $this->fillRequest($request);

        return $this->soapClient->getCountries($request)->countries;
    }

    /**
     * Получение списка городов
     *
     * @param string $countryId
     * @return Element\City[]
     */
    public function getCities($countryId)
    {
        $request = new Element\GetCitiesRequest();
        $this->fillRequest($request);

        $request->setCountryId($countryId);

        return $this->soapClient->getCities($request)->getCities();
    }

    /**
     * Поиск предложений
     *
     * @param string                         $arrivalDate
     * @param string                         $departureDate
     * @param string                         $cityId
     * @param Element\SearchOfferCriterion[] $searchCriteria
     * @param null                           $hotelId
     * @return Element\HotelWithOffers[]
     */
    public function searchHotelOffers($arrivalDate, $departureDate, $cityId, $searchCriteria = [], $hotelId = null)
    {
        $request = new Element\SearchHotelOffersRequest();
        $this->fillRequest($request);

        $request->setArrivalDate($arrivalDate);
        $request->setDepartureDate($departureDate);
        $request->setCityId($cityId);
        $request->setHotelId($hotelId);
        $request->setCurrency(Currencies::RUSSIAN_RUBLE);

        foreach ($searchCriteria as $criterian) {
            $request->addSearchCriteria($criterian);
        }
        
        return $this->soapClient->searchHotelOffers($request)->getHotels();
    }

    /**
     * Создание заказа
     *
     * @param Element\CreateOrderRequest $request
     * @return Element\Order
     */
    public function createOrder(Element\CreateOrderRequest $request)
    {
        $this->fillRequest($request);

        return $this->soapClient
            ->createOrder($request)
            ->getOrder();
    }

    /**
     * Получение заказа
     *
     * @param int $orderId
     *
     * @return Element\Order
     */
    public function getOrder($orderId)
    {
        $request = new Element\GetOrderRequest();
        $this->fillRequest($request);

        $request->setOrderId($orderId);

        return $this->soapClient->getOrder($request)->getOrder();
    }

    /**
     * Отмена заказа
     *
     * @param int $orderId
     * @return bool
     */
    public function cancelOrder($orderId)
    {
        $request = new Element\CancelOrderRequest();
        $this->fillRequest($request);

        $request->setOrderId($orderId);

        return $this->soapClient->cancelOrder($request)->result;
    }

    /**
     * Запрос описания отелей
     *
     * @param array $hotelIds
     * @return Element\HotelWithInfo[]
     */
    public function getHotelInfo($hotelIds)
    {
        $request = new Element\GetHotelInfoRequest();
        $this->fillRequest($request);

        foreach ((array)$hotelIds as $id) {
            $request->addHotelId($id);
        }

        return $this->soapClient->getHotelInfo($request)->getHotels();
    }

    /**
     *
     * @param string $offerCode
     * @return Element\HotelOffer
     */
    public function getHotelOffer($offerCode)
    {
        $request = new Element\GetHotelOfferRequest();
        $this->fillRequest($request);

        $request->addOfferCode($offerCode);

        return $this->soapClient->getHotelOffer($request)->getOffer();
    }

    /**
     * @return Element\Amenity[]
     */
    public function getAmenities()
    {
        $request = new Element\GetAmenitiesRequest();
        $this->fillRequest($request);
        
        return $this->soapClient->getAmenities($request)->amenities;
    }

    /**
     * Заполнение запроса всем, чем нужно
     *
     * @param Element\BaseRequest $request
     */
    protected function fillRequest(Element\BaseRequest $request)
    {
        $request->setCredentials($this->credentials);
        $request->setLanguage($this->language);
    }
}
