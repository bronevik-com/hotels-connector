<?php

namespace Bronevik;

use Bronevik\HotelsConnector\Element as Element;
use Bronevik\HotelsConnector\Enum\Currencies;
use Bronevik\HotelsConnector\Enum\Endpoints;


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
                    'Amenity'                                => \Bronevik\HotelsConnector\Element\Amenity::class,
                    'AvailableAmenity'                       => \Bronevik\HotelsConnector\Element\AvailableAmenity::class,
                    'AvailableMeal'                          => \Bronevik\HotelsConnector\Element\AvailableMeal::class,
                    'BaseRequest'                            => \Bronevik\HotelsConnector\Element\BaseRequest::class,
                    'BaseResponse'                           => \Bronevik\HotelsConnector\Element\BaseResponse::class,
                    'BreakfastInfo'                          => \Bronevik\HotelsConnector\Element\BreakfastInfo::class,
                    'CancelOrderRequest'                     => \Bronevik\HotelsConnector\Element\CancelOrderRequest::class,
                    'CancelOrderResponse'                    => \Bronevik\HotelsConnector\Element\CancelOrderResponse::class,
                    'CancellationPolicy'                     => \Bronevik\HotelsConnector\Element\CancellationPolicy::class,
                    'City'                                   => \Bronevik\HotelsConnector\Element\City::class,
                    'ClientPriceDetails'                     => \Bronevik\HotelsConnector\Element\ClientPriceDetails::class,
                    'Contract'                               => \Bronevik\HotelsConnector\Element\Contract::class,
                    'Country'                                => \Bronevik\HotelsConnector\Element\Country::class,
                    'CreateOrderRequest'                     => \Bronevik\HotelsConnector\Element\CreateOrderRequest::class,
                    'CreateOrderResponse'                    => \Bronevik\HotelsConnector\Element\CreateOrderResponse::class,
                    'Credentials'                            => \Bronevik\HotelsConnector\Element\Credentials::class,
                    'DailyPrice'                             => \Bronevik\HotelsConnector\Element\DailyPrice::class,
                    'DetailedPrice'                          => \Bronevik\HotelsConnector\Element\DetailedPrice::class,
                    'FaultDetail'                            => \Bronevik\HotelsConnector\Element\FaultDetail::class,
                    'GetAmenitiesRequest'                    => \Bronevik\HotelsConnector\Element\GetAmenitiesRequest::class,
                    'GetAmenitiesResponse'                   => \Bronevik\HotelsConnector\Element\GetAmenitiesResponse::class,
                    'GetCitiesRequest'                       => \Bronevik\HotelsConnector\Element\GetCitiesRequest::class,
                    'GetCitiesResponse'                      => \Bronevik\HotelsConnector\Element\GetCitiesResponse::class,
                    'GetCountriesRequest'                    => \Bronevik\HotelsConnector\Element\GetCountriesRequest::class,
                    'GetCountriesResponse'                   => \Bronevik\HotelsConnector\Element\GetCountriesResponse::class,
                    'GetHotelInfoRequest'                    => \Bronevik\HotelsConnector\Element\GetHotelInfoRequest::class,
                    'GetHotelInfoResponse'                   => \Bronevik\HotelsConnector\Element\GetHotelInfoResponse::class,
                    'GetHotelOfferRequest'                   => \Bronevik\HotelsConnector\Element\GetHotelOfferRequest::class,
                    'GetHotelOfferResponse'                  => \Bronevik\HotelsConnector\Element\GetHotelOfferResponse::class,
                    'GetMealsRequest'                        => \Bronevik\HotelsConnector\Element\GetMealsRequest::class,
                    'GetMealsResponse'                       => \Bronevik\HotelsConnector\Element\GetMealsResponse::class,
                    'GetOrderRequest'                        => \Bronevik\HotelsConnector\Element\GetOrderRequest::class,
                    'GetOrderResponse'                       => \Bronevik\HotelsConnector\Element\GetOrderResponse::class,
                    'Hotel'                                  => \Bronevik\HotelsConnector\Element\Hotel::class,
                    'HotelAmenity'                           => \Bronevik\HotelsConnector\Element\HotelAmenity::class,
                    'HotelOffer'                             => \Bronevik\HotelsConnector\Element\HotelOffer::class,
                    'HotelOfferCancellationPolicy'           => \Bronevik\HotelsConnector\Element\HotelOfferCancellationPolicy::class,
                    'HotelPriceDetails'                      => \Bronevik\HotelsConnector\Element\HotelPriceDetails::class,
                    'HotelRoom'                              => \Bronevik\HotelsConnector\Element\HotelRoom::class,
                    'HotelWithInfo'                          => \Bronevik\HotelsConnector\Element\HotelWithInfo::class,
                    'HotelWithOffers'                        => \Bronevik\HotelsConnector\Element\HotelWithOffers::class,
                    'Image'                                  => \Bronevik\HotelsConnector\Element\Image::class,
                    'InformationForGuest'                    => \Bronevik\HotelsConnector\Element\InformationForGuest::class,
                    'Meal'                                   => \Bronevik\HotelsConnector\Element\Meal::class,
                    'NamedDetailedPrice'                     => \Bronevik\HotelsConnector\Element\NamedDetailedPrice::class,
                    'Order'                                  => \Bronevik\HotelsConnector\Element\Order::class,
                    'OrderService'                           => \Bronevik\HotelsConnector\Element\OrderService::class,
                    'OrderServiceAccommodation'              => \Bronevik\HotelsConnector\Element\OrderServiceAccommodation::class,
                    'PingRequest'                            => \Bronevik\HotelsConnector\Element\PingRequest::class,
                    'PingResponse'                           => \Bronevik\HotelsConnector\Element\PingResponse::class,
                    'PriceDetails'                           => \Bronevik\HotelsConnector\Element\PriceDetails::class,
                    'SearchHotelOffersRequest'               => \Bronevik\HotelsConnector\Element\SearchHotelOffersRequest::class,
                    'SearchHotelOffersResponse'              => \Bronevik\HotelsConnector\Element\SearchHotelOffersResponse::class,
                    'SearchOfferCriterion'                   => \Bronevik\HotelsConnector\Element\SearchOfferCriterion::class,
                    'SearchOfferCriterionBreakfastIncluded'  => \Bronevik\HotelsConnector\Element\SearchOfferCriterionBreakfastIncluded::class,
                    'SearchOfferCriterionHotelCategory'      => \Bronevik\HotelsConnector\Element\SearchOfferCriterionHotelCategory::class,
                    'SearchOfferCriterionHotelName'          => \Bronevik\HotelsConnector\Element\SearchOfferCriterionHotelName::class,
                    'SearchOfferCriterionNumberOfGuests'     => \Bronevik\HotelsConnector\Element\SearchOfferCriterionNumberOfGuests::class,
                    'SearchOfferCriterionOnlyOnline'         => \Bronevik\HotelsConnector\Element\SearchOfferCriterionOnlyOnline::class,
                    'SearchOrderCriterion'                   => \Bronevik\HotelsConnector\Element\SearchOrderCriterion::class,
                    'SearchOrderCriterionArrivalDate'        => \Bronevik\HotelsConnector\Element\SearchOrderCriterionArrivalDate::class,
                    'SearchOrderCriterionCreateDate'         => \Bronevik\HotelsConnector\Element\SearchOrderCriterionCreateDate::class,
                    'SearchOrderCriterionGuest'              => \Bronevik\HotelsConnector\Element\SearchOrderCriterionGuest::class,
                    'SearchOrderCriterionOrderId'            => \Bronevik\HotelsConnector\Element\SearchOrderCriterionOrderId::class,
                    'SearchOrderCriterionServiceId'          => \Bronevik\HotelsConnector\Element\SearchOrderCriterionServiceId::class,
                    'SearchOrderCriterionServiceReferenceId' => \Bronevik\HotelsConnector\Element\SearchOrderCriterionServiceReferenceId::class,
                    'SearchOrdersRequest'                    => \Bronevik\HotelsConnector\Element\SearchOrdersRequest::class,
                    'SearchOrdersResponse'                   => \Bronevik\HotelsConnector\Element\SearchOrdersResponse::class,
                    'Service'                                => \Bronevik\HotelsConnector\Element\Service::class,
                    'ServiceAccommodation'                   => \Bronevik\HotelsConnector\Element\ServiceAccommodation::class,
                    'UpdateOrderRequest'                     => \Bronevik\HotelsConnector\Element\UpdateOrderRequest::class,
                    'UpdateOrderResponse'                    => \Bronevik\HotelsConnector\Element\UpdateOrderResponse::class,
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
     * Поиск закаов по притериям
     * @param Element\SearchOrderCriterion[] $searchCriteria
     * @return Element\Order[]
     */
    public function searchOrders($searchCriteria)
    {
        $request = new Element\SearchOrdersRequest();
        $this->fillRequest($request);

        foreach ($searchCriteria as $criterion) {
            $request->addSearchCriteria($criterion);
        }

        return $this->soapClient->searchOrders($request)->getOrders();
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
