<?php

namespace Bronevik;

use Bronevik\HotelsConnector\Element as Element;
use Bronevik\HotelsConnector\Enum\ClassMaps;
use Bronevik\HotelsConnector\Enum\Currencies;
use Bronevik\HotelsConnector\Enum\CurrencyCodes;
use Bronevik\HotelsConnector\Enum\Endpoints;
use Bronevik\HotelsConnector\Enum\Operations;
use SoapClient;
use SoapFault;

class HotelsConnector
{
    /**
     * Основной endpoint
     *
     * @var string
     * @see Endpoints
     */
    private $endpoint;

    /**
     * Дополнительный endpoint
     *
     * @var string
     * @see Endpoints::SECURE_*
     */
    private $secureEndpoint;

    /**
     * Клиент
     *
     * @var SoapClient
     */
    protected $soapClient;

    /**
     * Клиент для дополнительного endpoint
     *
     * @var SoapClient
     */
    protected $secureSoapClient;

    /**
     * Последний запущенный клиент
     *
     * @var SoapClient
     */
    private $lastStartedClient;

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
     * @param string $secureEndpoint
     * @param bool   $debugMode
     */
    public function __construct(
        $endpoint,
        $secureEndpoint,
        $debugMode = false
    ) {
        $this->endpoint       = $endpoint;
        $this->secureEndpoint = $secureEndpoint;
        $this->debugMode      = (bool) $debugMode;
    }

    /**
     * @return bool
     */
    protected function isDebugMode()
    {
        return $this->debugMode;
    }

    /**
     * @return SoapClient
     * @throws SoapFault
     */
    private function getSoapClient()
    {
        if ($this->soapClient === null) {
            $this->soapClient = $this->makeSoapClient(
                $this->endpoint,
                ClassMaps::CLASSMAP_FOR_BASE_ENDPOINT
            );
        }

        $this->lastStartedClient = $this->soapClient;

        return $this->soapClient;
    }

    /**
     * @throws SoapFault
     */
    private function getSecureSoapClient()
    {
        if ($this->secureSoapClient === null) {
            $this->secureSoapClient = $this->makeSoapClient(
                $this->secureEndpoint,
                ClassMaps::CLASSMAP_FOR_SECURE_ENDPOINT
            );
        }

        $this->lastStartedClient = $this->secureSoapClient;

        return $this->secureSoapClient;
    }

    /**
     * @param string $endpoint
     * @param array  $classMap
     *
     * @return SoapClient
     * @throws SoapFault
     */
    private function makeSoapClient($endpoint, array $classMap)
    {
        return new SoapClient(
            Endpoints::$wsdlUrls[$endpoint],
            [
                'location'    => $endpoint,
                'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE,
                'cache_wsdl'  => $this->isDebugMode() ? WSDL_CACHE_NONE : WSDL_CACHE_BOTH,
                'trace'       => $this->isDebugMode(),
                'features'    => SOAP_SINGLE_ELEMENT_ARRAYS,
                'classmap'    => $classMap,
            ]
        );
    }

    /**
     * @return string
     */
    public function getLastResponse()
    {
        return $this->lastStartedClient->__getLastResponse();
    }

    /**
     * @return string
     */
    public function getLastRequest()
    {
        return $this->lastStartedClient->__getLastRequest();
    }

    /**
     * @return string
     */
    public function getLastRequestHeaders()
    {
        return $this->lastStartedClient->__getLastRequestHeaders();
    }

    /**
     * @return string
     */
    public function getLastResponseHeaders()
    {
        return $this->lastStartedClient->__getLastResponseHeaders();
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
     *
     * @return string $data;
     * @throws SoapFault
     */
    public function ping($data)
    {
        $request = new Element\PingRequest();
        $this->fillRequest($request);

        $request->setData($data);

        /** @var Element\PingResponse $response */
        $response = $this->getSoapClient()->__call(Operations::PING, [$request]);

        return $response->data;
    }

    /**
     * Получение списка типов питания
     *
     * @return Element\Meals
     * @throws SoapFault
     */
    public function getMeals()
    {
        $request = new Element\GetMealsRequest();
        $this->fillRequest($request);

        /** @var Element\GetMealsResponse $response */
        $response = $this->getSoapClient()->__call(Operations::GET_MEALS, [$request]);

        return $response->meals;
    }

    /**
     * Получение списка стран
     *
     * @return Element\Countries
     * @throws SoapFault
     */
    public function getCountries()
    {
        $request = new Element\GetCountriesRequest();
        $this->fillRequest($request);

        /** @var Element\GetCountriesResponse $response */
        $response = $this->getSoapClient()->__call(Operations::GET_COUNTRIES, [$request]);

        return $response->countries;
    }

    /**
     * Получение списка городов по стране
     *
     * @param $countryId
     *
     * @return Element\Cities
     * @throws SoapFault
     */
    public function getCitiesByCountryId($countryId)
    {
        $request = new Element\GetCitiesRequest();
        $this->fillRequest($request);

        $request->setCountryId($countryId);

        /** @var Element\GetCitiesResponse $response */
        $response = $this->getSoapClient()->__call(Operations::GET_CITIES, [$request]);

        return $response->getCities();
    }

    /**
     * Получение списка городов по городам
     *
     * @param array $cityIds
     *
     * @throws SoapFault
     */
    public function getCitiesByCityIds($cityIds)
    {
        $request = new Element\GetCitiesRequest();
        $this->fillRequest($request);

        $cityIdsHba = new Element\CityIds();
        $cityIdsHba->setId($cityIds);

        $request->setCityIds($cityIdsHba);

        /** @var Element\GetCitiesResponse $response */
        $response = $this->getSoapClient()->__call(Operations::GET_CITIES, [$request]);

        return $response->getCities();
    }

    /**
     * Поиск предложений
     *
     * @param string                         $arrivalDate
     * @param string                         $departureDate
     * @param string                         $currency
     * @param int|null                       $cityId
     * @param Element\SearchOfferCriterion[] $searchCriteria
     * @param int[]                          $hotelIds
     * @param string[]                       $skipElements
     * @param Element\GeoLocation|null       $geolocation
     *
     * @return Element\Hotels
     * @throws SoapFault
     */
    public function searchHotelOffers(
        $arrivalDate,
        $departureDate,
        $currency,
        $cityId = null,
        $searchCriteria = [],
        $hotelIds = [],
        $skipElements = [],
        $geolocation = null
    ) {
        $request = new Element\SearchHotelOffersRequest();
        $this->fillRequest($request);

        $request->setArrivalDate($arrivalDate);
        $request->setDepartureDate($departureDate);
        $request->setCurrency($currency);

        if ($cityId) {
            $request->setCityId($cityId);
        }
        if ($hotelIds) {
            $request->hotelIds     = new Element\HotelIds();
            $request->hotelIds->id = $hotelIds;
        }
        if ($skipElements) {
            $request->skipElements          = new Element\SkipElements();
            $request->skipElements->element = $skipElements;
        }

        $request->geolocation = $geolocation;

        foreach ($searchCriteria as $criterian) {
            $request->addSearchCriteria($criterian);
        }

        /** @var Element\SearchHotelOffersResponse $response */
        $response = $this->getSoapClient()->__call(Operations::SEARCH_HOTEL_OFFERS, [$request]);

        return $response->getHotels();
    }

    /**
     * Создание заказа
     *
     * @param Element\CreateOrderRequest $request
     *
     * @return Element\Order
     * @throws SoapFault
     */
    public function createOrder(Element\CreateOrderRequest $request)
    {
        $this->fillRequest($request);

        /** @var Element\CreateOrderResponse $response */
        $response = $this->getSoapClient()->__call(Operations::CREATE_ORDER, [$request]);

        return $response->getOrder();
    }

    /**
     * Получение заказа
     *
     * @param int $orderId
     *
     * @return Element\Order
     * @throws SoapFault
     */
    public function getOrder($orderId)
    {
        $request = new Element\GetOrderRequest();
        $this->fillRequest($request);

        $request->setOrderId($orderId);

        /** @var Element\GetOrderResponse $response */
        $response = $this->getSoapClient()->__call(Operations::GET_ORDER, [$request]);

        return $response->getOrder();
    }

    /**
     * Отмена заказа
     *
     * @param int $orderId
     *
     * @return bool
     * @throws SoapFault
     */
    public function cancelOrder($orderId)
    {
        $request = new Element\CancelOrderRequest();
        $this->fillRequest($request);

        $request->setOrderId($orderId);

        /** @var Element\CancelOrderResponse $response */
        $response = $this->getSoapClient()->__call(Operations::CANCEL_ORDER, [$request]);

        return $response->result;
    }

    /**
     * Запрос описания отелей
     *
     * @param array $hotelIds
     * @param array $cityIds
     *
     * @return Element\HotelsWithInfo
     * @throws SoapFault
     */
    public function getHotelInfo($hotelIds)
    {
        $request = new Element\GetHotelInfoRequest();
        $this->fillRequest($request);

        foreach ((array) $hotelIds as $id) {
            $request->hotelIds->addId($id);
        }

        /** @var Element\GetHotelInfoResponse $response */
        $response = $this->getSoapClient()->__call(Operations::GET_HOTEL_INFO, [$request]);

        return $response->getHotels();
    }

    /**
     * Запрос описания отелей в выбранных городах
     *
     * @param array $cityIds
     *
     * @return Element\HotelsWithInfo
     * @throws SoapFault
     */
    public function getHotelInfoByCityIds($cityIds)
    {
        $request = new Element\GetHotelInfoRequest();
        $this->fillRequest($request);

        $request->cityIds->setId($cityIds);

        /** @var Element\GetHotelInfoResponse $response */
        $response = $this->getSoapClient()->__call(Operations::GET_HOTEL_INFO, [$request]);

        return $response->getHotels();
    }

    /**
     * @param Element\ServiceAccommodation[] $services
     * @param string                         $currency
     *
     * @return Element\OrderServices
     * @throws SoapFault
     */
    public function getHotelOfferPricing($services, $currency)
    {
        $request = new Element\GetHotelOfferPricingRequest();
        $request->setCurrency($currency);
        $this->fillRequest($request);

        foreach ((array) $services as $serviceAccommodation) {
            $request->addServices($serviceAccommodation);
        }

        /** @var Element\GetHotelOfferPricingResponse $response */
        $response = $this->getSoapClient()->__call(Operations::GET_HOTEL_OFFER_PRICING, [$request]);

        return $response->services;
    }

    /**
     * @return Element\OrdersChangelogRecords
     * @throws SoapFault
     */
    public function getOrdersChangelog()
    {
        $request = new Element\GetOrdersChangelogRequest();
        $this->fillRequest($request);

        /** @var Element\GetOrdersChangelogResponse $response */
        $response = $this->getSoapClient()->__call(Operations::GET_ORDERS_CHANGELOG, [$request]);

        return $response->ordersChangelogRecords;
    }

    /**
     * @param int[] $recordIds
     *
     * @return string
     * @throws SoapFault
     */
    public function removeOrdersChangelogRecords($recordIds)
    {
        $request = new Element\RemoveOrdersChangelogRecordsRequest();
        $this->fillRequest($request);

        foreach ((array) $recordIds as $id) {
            $request->getRecordIds()->addId($id);
        }

        /** @var Element\RemoveOrdersChangelogRecordsResponse $response */
        $response = $this->getSoapClient()->__call(Operations::REMOVE_ORDERS_CHANGELOG_RECORDS, [$request]);

        return $response->status;
    }

    /**
     * @return Element\Amenities
     * @throws SoapFault
     */
    public function getAmenities()
    {
        $request = new Element\GetAmenitiesRequest();
        $this->fillRequest($request);

        /** @var Element\GetAmenitiesResponse $response */
        $response = $this->getSoapClient()->__call(Operations::GET_AMENITIES, [$request]);

        return $response->amenities;
    }

    /**
     * Поиск закаов по критериям
     *
     * @param Element\SearchOrderCriterion[] $searchCriteria
     *
     * @return Element\Orders
     * @throws SoapFault
     */
    public function searchOrders($searchCriteria)
    {
        $request = new Element\SearchOrdersRequest();
        $this->fillRequest($request);

        foreach ($searchCriteria as $criterion) {
            $request->addSearchCriteria($criterion);
        }

        /** @var Element\SearchOrdersResponse $response */
        $response = $this->getSoapClient()->__call(Operations::SEARCH_ORDERS, [$request]);

        return $response->getOrders();
    }

    /**
     * Поиск сообщений чата с клиентом
     *
     * @param int   $serviceId
     * @param int[] $messageIds
     *
     * @return Element\Messages
     * @throws SoapFault
     */
    public function getServiceMessages($serviceId = null, array $messageIds = [])
    {
        $request = new Element\GetServiceMessagesRequest();
        $this->fillRequest($request);

        if ($serviceId) {
            $request->serviceId = $serviceId;
        }
        if ($messageIds) {
            $request->serviceMessages     = new Element\ServiceMessages();
            $request->serviceMessages->id = $messageIds;
        }

        /** @var Element\GetServiceMessagesResponse $response */
        $response = $this->getSoapClient()->__call(Operations::GET_SERVICE_MESSAGES, [$request]);

        return $response->getMessages();
    }

    /**
     * Отправка сообщения в чат с клиентом
     *
     * @param int    $serviceId
     * @param string $text
     *
     * @return int
     * @throws SoapFault
     */
    public function sendServiceMessage($serviceId, $text)
    {
        $request = new Element\SendServiceMessageRequest();
        $this->fillRequest($request);

        $request->serviceId = $serviceId;
        $request->text      = $text;

        /** @var Element\SendServiceMessageResponse $response */
        $response = $this->getSoapClient()->__call(Operations::SEND_SERVICE_MESSAGE, [$request]);

        return $response->getId();
    }

    /**
     * Аннуляция услуг
     *
     * @param int[] $serviceIds
     *
     * @return Element\CancelledService[]
     * @throws SoapFault
     */
    public function cancelServices(array $serviceIds)
    {
        $request = new Element\CancelServicesRequest();
        $this->fillRequest($request);

        $request->serviceIds = $serviceIds;

        /** @var Element\CancelServicesResponse $response */
        $response = $this->getSoapClient()->__call(Operations::CANCEL_SERVICES, [$request]);

        return $response->services->service;
    }

    /**
     * Коррекция услуги
     *
     * @param int                   $serviceId
     * @param Element\UpdateService $updateService
     *
     * @return Element\UpdateServiceResponse
     * @throws SoapFault
     */
    public function updateService($serviceId, Element\UpdateService $updateService)
    {
        $request = new Element\UpdateServiceRequest();
        $this->fillRequest($request);

        $request->setServiceId($serviceId);
        $request->setUpdateService($updateService);

        /** @var Element\UpdateServiceResponse $response */
        return $this->getSoapClient()->__call(Operations::UPDATE_SERVICE, [$request]);
    }

    /**
     * Получить цены за ранный заезд и поздний выезд
     *
     * @param string[] $offerCodes
     * @param string   $currency
     *
     * @return Element\OfferCheckinCheckoutPrices[]
     * @throws SoapFault
     */
    public function getCheckinCheckoutPricing(array $offerCodes, $currency)
    {
        $request = new Element\GetCheckinCheckoutPricingRequest();
        $request->setCurrency($currency);
        $this->fillRequest($request);

        $request->offerCodes = $offerCodes;

        /** @var Element\GetCheckinCheckoutPricingResponse $response */
        $response = $this->getSoapClient()->__call(Operations::GET_CHECKIN_CHECKOUT_PRICING, [$request]);

        return $response->checkinCheckoutPrices->offerPrices;
    }

    /**
     * Безрейтовый поиск
     *
     * @param string                         $checkinDate
     * @param string                         $checkOutDate
     * @param int|null                       $cityId
     * @param int[]                          $hotelIds
     * @param string                         $currency
     * @param Element\GeoLocation|null       $geolocation
     * @param string[]                       $addElements
     * @param Element\SearchOfferCriterion[] $searchCriteria
     *
     * @return Element\HotelWithCheapestOffer[]
     * @throws SoapFault
     */
    public function searchHotelAvailability(
        $checkinDate,
        $checkOutDate,
        $currency,
        $cityId = null,
        array $hotelIds = [],
        Element\GeoLocation $geolocation = null,
        array $addElements = [],
        array $searchCriteria = []
    ) {
        $request = new Element\SearchHotelAvailabilityRequest();
        $this->fillRequest($request);

        $request->checkInDate    = $checkinDate;
        $request->checkOutDate   = $checkOutDate;
        $request->currency       = $currency;
        $request->cityId         = $cityId;
        $request->hotelIds       = $hotelIds;
        $request->geolocation    = $geolocation;
        $request->addElements    = $addElements;
        $request->searchCriteria = $searchCriteria;

        /** @var Element\SearchHotelAvailabilityResponse $response */
        $response = $this->getSoapClient()->__call(Operations::SEARCH_HOTEL_AVAILABILITY, [$request]);

        return $response->hotels->hotel;
    }

    /**
     * Получение доступности коррекции для услуг
     *
     * @param int[]    $serviceIds
     * @param string[] $availableCorrectionTypes
     *
     * @throws SoapFault
     */
    public function getServiceAvailableCorrection(
        $serviceIds,
        $availableCorrectionTypes
    ) {
        $request = new Element\GetServiceAvailableCorrectionsRequest();
        $this->fillRequest($request);

        $request->serviceId = $serviceIds;

        if (count($availableCorrectionTypes) > 0) {
            $request->availableCorrectionTypes = new Element\AvailableCorrectionTypes();
            $request->availableCorrectionTypes->correctionType = $availableCorrectionTypes;
        }

        /** @var Element\GetServiceAvailableCorrectionsResponse $response */
        return $this->getSoapClient()->__soapCall(Operations::GET_SERVICE_AVAILABLE_CORRECTION, [$request]);
    }

    /**
     * Стоимость услуги с учетом коррекции
     *
     * @param int                   $serviceId
     * @param Element\UpdateService $updateService
     *
     * @return Element\GetServicePricingResponse
     * @throws SoapFault
     */
    public function getServicePricingRequest(
        $serviceId,
        Element\UpdateService $updateService
    ) {
        $request = new Element\GetServicePricingRequest();
        $this->fillRequest($request);

        $request->setServiceId($serviceId);
        $request->setUpdateService($updateService);

        /** @var Element\GetServicePricingResponse $response */
        return $this->getSoapClient()->__soapCall(Operations::GET_SERVICE_PRICING, [$request]);
    }

    /**
     * @param Element\CreateOrderWithCardDetailsRequest $request
     *
     * @return Element\Order
     * @throws SoapFault
     */
    public function createOrderWithCardDetails(Element\CreateOrderWithCardDetailsRequest $request)
    {
        $this->fillRequest($request);

        /** @var Element\CreateOrderWithCardDetailsResponse $response */
        $response = $this->getSecureSoapClient()->__call(Operations::CREATE_ORDER_WITH_CARD_DETAILS, [$request]);

        return $response->getOrder();
    }

    /**
     * Получение счетов заказа
     *
     * @param int $orderId
     *
     * @throws SoapFault
     */
    public function getOrderInvoices($orderId)
    {
        $request = new Element\GetOrderInvoicesRequest();
        $request->setOrderId($orderId);

        $this->fillRequest($request);

        /** @var Element\GetOrderInvoicesResponse $response */
        $response = $this->getSoapClient()->__soapCall(Operations::GET_ORDER_INVOICES, [$request]);

        return $response->getOrder();
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
