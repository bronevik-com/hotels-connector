<?php

namespace Bronevik;

use Bronevik\HotelsConnector\Element as Element;
use Bronevik\HotelsConnector\Enum\Currencies;
use Bronevik\HotelsConnector\Enum\Endpoints;
use SoapClient;
use SoapFault;

class HotelsConnector
{
    /**
     * Клиент
     *
     * @var SoapClient
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
     * @param bool   $debugMode
     *
     * @throws SoapFault
     */
    public function __construct($endpoint, $debugMode = false)
    {
        $this->debugMode = (bool) $debugMode;
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
     *
     * @throws SoapFault
     */
    protected function createSoapClient($endpoint)
    {
        $this->soapClient = new SoapClient(
            Endpoints::$wsdlUrls[$endpoint],
            [
                'location'    => $endpoint,
                'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP,
                'cache_wsdl'  => $this->isDebugMode() ? WSDL_CACHE_NONE : WSDL_CACHE_BOTH,
                'trace'       => $this->isDebugMode(),
                'features'    => SOAP_SINGLE_ELEMENT_ARRAYS,
                'classmap'    => [
                    'AddElements'                            => Element\AddElements::class,
                    'AdditionalInfo'                         => Element\AdditionalInfo::class,
                    'Amenity'                                => Element\Amenity::class,
                    'AvailableAmenities'                     => Element\AvailableAmenities::class,
                    'AvailableAmenity'                       => Element\AvailableAmenity::class,
                    'AvailableMeal'                          => Element\AvailableMeal::class,
                    'AvailableMeals'                         => Element\AvailableMeals::class,
                    'BaseOffer'                              => Element\BaseOffer::class,
                    'BaseRequest'                            => Element\BaseRequest::class,
                    'BaseResponse'                           => Element\BaseResponse::class,
                    'Bed'                                    => Element\Bed::class,
                    'BedSet'                                 => Element\BedSet::class,
                    'BedSets'                                => Element\BedSets::class,
                    'BreakfastInfo'                          => Element\BreakfastInfo::class,
                    'CancelOrderRequest'                     => Element\CancelOrderRequest::class,
                    'CancelOrderResponse'                    => Element\CancelOrderResponse::class,
                    'CancelServicesRequest'                  => Element\CancelServicesRequest::class,
                    'CancelServicesResponse'                 => Element\CancelServicesResponse::class,
                    'CancellationPolicy'                     => Element\CancellationPolicy::class,
                    'CancelledService'                       => Element\CancelledService::class,
                    'CancelledServices'                      => Element\CancelledServices::class,
                    'Change'                                 => Element\Change::class,
                    'ChangeList'                             => Element\ChangeList::class,
                    'City'                                   => Element\City::class,
                    'ClientPriceDetails'                     => Element\ClientPriceDetails::class,
                    'Contract'                               => Element\Contract::class,
                    'Coordinates'                            => Element\Coordinates::class,
                    'Country'                                => Element\Country::class,
                    'CountryCodes'                           => Element\CountryCodes::class,
                    'CreateOrderRequest'                     => Element\CreateOrderRequest::class,
                    'CreateOrderResponse'                    => Element\CreateOrderResponse::class,
                    'Credentials'                            => Element\Credentials::class,
                    'DailyPrice'                             => Element\DailyPrice::class,
                    'DailyPriceMeals'                        => Element\DailyPriceMeals::class,
                    'DailyPrices'                            => Element\DailyPrices::class,
                    'DescriptionDetails'                     => Element\DescriptionDetails::class,
                    'DetailedPrice'                          => Element\DetailedPrice::class,
                    'FaultDetail'                            => Element\FaultDetail::class,
                    'GeoLocation'                            => Element\GeoLocation::class,
                    'GetAmenitiesRequest'                    => Element\GetAmenitiesRequest::class,
                    'GetAmenitiesResponse'                   => Element\GetAmenitiesResponse::class,
                    'GetCheckinCheckoutPricingRequest'       => Element\GetCheckinCheckoutPricingRequest::class,
                    'GetCheckinCheckoutPricingResponse'      => Element\GetCheckinCheckoutPricingResponse::class,
                    'GetCitiesRequest'                       => Element\GetCitiesRequest::class,
                    'GetCitiesResponse'                      => Element\GetCitiesResponse::class,
                    'GetCountriesRequest'                    => Element\GetCountriesRequest::class,
                    'GetCountriesResponse'                   => Element\GetCountriesResponse::class,
                    'GetHotelInfoRequest'                    => Element\GetHotelInfoRequest::class,
                    'GetHotelInfoResponse'                   => Element\GetHotelInfoResponse::class,
                    'GetHotelOfferPricingRequest'            => Element\GetHotelOfferPricingRequest::class,
                    'GetHotelOfferPricingResponse'           => Element\GetHotelOfferPricingResponse::class,
                    'GetHotelOfferRequest'                   => Element\GetHotelOfferRequest::class,
                    'GetHotelOfferResponse'                  => Element\GetHotelOfferResponse::class,
                    'GetMealsRequest'                        => Element\GetMealsRequest::class,
                    'GetMealsResponse'                       => Element\GetMealsResponse::class,
                    'GetOrderRequest'                        => Element\GetOrderRequest::class,
                    'GetOrderResponse'                       => Element\GetOrderResponse::class,
                    'GetOrdersChangelogRequest'              => Element\GetOrdersChangelogRequest::class,
                    'GetOrdersChangelogResponse'             => Element\GetOrdersChangelogResponse::class,
                    'GetServiceMessagesRequest'              => Element\GetServiceMessagesRequest::class,
                    'GetServiceMessagesResponse'             => Element\GetServiceMessagesResponse::class,
                    'Hotel'                                  => Element\Hotel::class,
                    'HotelAmenity'                           => Element\HotelAmenity::class,
                    'HotelGeo'                               => Element\HotelGeo::class,
                    'HotelIds'                               => Element\HotelIds::class,
                    'HotelInfo'                              => Element\HotelInfo::class,
                    'HotelOffer'                             => Element\HotelOffer::class,
                    'HotelOfferCancellationPolicy'           => Element\HotelOfferCancellationPolicy::class,
                    'HotelOffers'                            => Element\HotelOffers::class,
                    'HotelPriceDetails'                      => Element\HotelPriceDetails::class,
                    'HotelRoom'                              => Element\HotelRoom::class,
                    'HotelVatInfo'                           => Element\HotelVatInfo::class,
                    'HotelWithCheapestOffer'                 => Element\HotelWithCheapestOffer::class,
                    'HotelWithInfo'                          => Element\HotelWithInfo::class,
                    'HotelWithOffers'                        => Element\HotelWithOffers::class,
                    'Hotels'                                 => Element\Hotels::class,
                    'HotelsWithCheapestOffer'                => Element\HotelsWithCheapestOffer::class,
                    'Image'                                  => Element\Image::class,
                    'Info'                                   => Element\Info::class,
                    'InformationForGuest'                    => Element\InformationForGuest::class,
                    'Meal'                                   => Element\Meal::class,
                    'MealPriceDetails'                       => Element\MealPriceDetails::class,
                    'Message'                                => Element\Message::class,
                    'Messages'                               => Element\Messages::class,
                    'NamedDetailedPrice'                     => Element\NamedDetailedPrice::class,
                    'OfferCheckinCheckoutPrices'             => Element\OfferCheckinCheckoutPrices::class,
                    'OfferCodes'                             => Element\OfferCodes::class,
                    'OfferHourPrice'                         => Element\OfferHourPrice::class,
                    'OfferHourPrices'                        => Element\OfferHourPrices::class,
                    'OfferPolicy'                            => Element\OfferPolicy::class,
                    'OffersCheckinCheckoutPrices'            => Element\OffersCheckinCheckoutPrices::class,
                    'Order'                                  => Element\Order::class,
                    'OrderService'                           => Element\OrderService::class,
                    'OrderServiceAccommodation'              => Element\OrderServiceAccommodation::class,
                    'OrdersChangelogRecord'                  => Element\OrdersChangelogRecord::class,
                    'PingRequest'                            => Element\PingRequest::class,
                    'PingResponse'                           => Element\PingResponse::class,
                    'PriceDetails'                           => Element\PriceDetails::class,
                    'RemoveOrdersChangelogRecordsRequest'    => Element\RemoveOrdersChangelogRecordsRequest::class,
                    'RemoveOrdersChangelogRecordsResponse'   => Element\RemoveOrdersChangelogRecordsResponse::class,
                    'SearchAvailabilityHotelOffer'           => Element\SearchAvailabilityHotelOffer::class,
                    'SearchHotelAvailabilityRequest'         => Element\SearchHotelAvailabilityRequest::class,
                    'SearchHotelAvailabilityResponse'        => Element\SearchHotelAvailabilityResponse::class,
                    'SearchHotelOffersRequest'               => Element\SearchHotelOffersRequest::class,
                    'SearchHotelOffersResponse'              => Element\SearchHotelOffersResponse::class,
                    'SearchOfferCriterion'                   => Element\SearchOfferCriterion::class,
                    'SearchOfferCriterionBreakfastIncluded'  => Element\SearchOfferCriterionBreakfastIncluded::class,
                    'SearchOfferCriterionHotelCategory'      => Element\SearchOfferCriterionHotelCategory::class,
                    'SearchOfferCriterionHotelName'          => Element\SearchOfferCriterionHotelName::class,
                    'SearchOfferCriterionNumberOfGuests'     => Element\SearchOfferCriterionNumberOfGuests::class,
                    'SearchOfferCriterionOnlyOnline'         => Element\SearchOfferCriterionOnlyOnline::class,
                    'SearchOfferCriterionPaymentRecipient'   => Element\SearchOfferCriterionPaymentRecipient::class,
                    'SearchOrderCriterion'                   => Element\SearchOrderCriterion::class,
                    'SearchOrderCriterionArrivalDate'        => Element\SearchOrderCriterionArrivalDate::class,
                    'SearchOrderCriterionCreateDate'         => Element\SearchOrderCriterionCreateDate::class,
                    'SearchOrderCriterionDepartureDate'      => Element\SearchOrderCriterionDepartureDate::class,
                    'SearchOrderCriterionGuest'              => Element\SearchOrderCriterionGuest::class,
                    'SearchOrderCriterionOrderId'            => Element\SearchOrderCriterionOrderId::class,
                    'SearchOrderCriterionServiceId'          => Element\SearchOrderCriterionServiceId::class,
                    'SearchOrderCriterionServiceReferenceId' => Element\SearchOrderCriterionServiceReferenceId::class,
                    'SearchOrdersRequest'                    => Element\SearchOrdersRequest::class,
                    'SearchOrdersResponse'                   => Element\SearchOrdersResponse::class,
                    'SendServiceMessageRequest'              => Element\SendServiceMessageRequest::class,
                    'SendServiceMessageResponse'             => Element\SendServiceMessageResponse::class,
                    'Service'                                => Element\Service::class,
                    'ServiceAccommodation'                   => Element\ServiceAccommodation::class,
                    'ServiceExtraField'                      => Element\ServiceExtraField::class,
                    'ServiceIdsForCancellation'              => Element\ServiceIdsForCancellation::class,
                    'ServiceMessages'                        => Element\ServiceMessages::class,
                    'SkipElements'                           => Element\SkipElements::class,
                    'Tax'                                    => Element\Tax::class,
                    'UpdateOrderRequest'                     => Element\UpdateOrderRequest::class,
                    'UpdateOrderResponse'                    => Element\UpdateOrderResponse::class,
                    'UpdateServiceRequest'                   => Element\UpdateServiceRequest::class,
                    'UpdateServiceResponse'                  => Element\UpdateServiceResponse::class,
                    'WindowViews'                            => Element\WindowViews::class,
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
     *
     * @return string $data;
     * @throws SoapFault
     */
    public function ping($data)
    {
        $request = new Element\PingRequest();
        $this->fillRequest($request);

        $request->setData($data);

        return $this->soapClient->ping($request)->data;
    }

    /**
     * Получение списка типов питания
     *
     * @return Element\Meal[]
     * @throws SoapFault
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
     * @throws SoapFault
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
     *
     * @return Element\City[]
     * @throws SoapFault
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
     * @param int|null                       $cityId
     * @param Element\SearchOfferCriterion[] $searchCriteria
     * @param int[]                          $hotelIds
     * @param string[]                       $skipElements
     * @param Element\GeoLocation|null       $geolocation
     *
     * @return Element\Hotels
     */
    public function searchHotelOffers(
        $arrivalDate,
        $departureDate,
        $cityId = null,
        $searchCriteria = [],
        $hotelIds = [],
        $skipElements = [],
        $geolocation = null
    )
    {
        $request = new Element\SearchHotelOffersRequest();
        $this->fillRequest($request);

        $request->setArrivalDate($arrivalDate);
        $request->setDepartureDate($departureDate);
        $request->setCurrency(Currencies::RUSSIAN_RUBLE);

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

        return $this->soapClient->searchHotelOffers($request)->getHotels();
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
     * @throws SoapFault
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
     *
     * @return bool
     * @throws SoapFault
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
     *
     * @return Element\HotelWithInfo[]
     * @throws SoapFault
     * @deprecated
     */
    public function getHotelInfo($hotelIds)
    {
        $request = new Element\GetHotelInfoRequest();
        $this->fillRequest($request);

        foreach ((array) $hotelIds as $id) {
            $request->addHotelId($id);
        }

        return $this->soapClient->getHotelInfo($request)->getHotels();
    }

    /**
     *
     * @param string   $offerCode
     * @param string[] $skipElements
     *
     * @return Element\HotelOffer
     * @throws SoapFault
     * @deprecated
     */
    public function getHotelOffer($offerCode, $skipElements = [])
    {
        $request = new Element\GetHotelOfferRequest();
        $this->fillRequest($request);

        $request->addOfferCode($offerCode);

        if ($skipElements) {
            $request->skipElements          = new Element\SkipElements();
            $request->skipElements->element = $skipElements;
        }

        return $this->soapClient->getHotelOffer($request)->getOffer();
    }

    /**
     * @param Element\ServiceAccommodation[] $services
     *
     * @return Element\OrderServiceAccommodation[]
     * @throws SoapFault
     */
    public function GetHotelOfferPricing($services)
    {
        $request = new Element\GetHotelOfferPricingRequest();
        $this->fillRequest($request);

        foreach ((array) $services as $serviceAccommodation) {
            $request->addServices($serviceAccommodation);
        }

        return $this->soapClient->GetHotelOfferPricing($request)->services;
    }

    /**
     * @return Element\OrdersChangelogRecord[]
     * @throws SoapFault
     */
    public function GetOrdersChangelog()
    {
        $request = new Element\GetOrdersChangelogRequest();
        $this->fillRequest($request);

        return $this->soapClient->GetOrdersChangelog($request)->ordersChangelogRecord;
    }

    /**
     * @param int[] $recordIds
     *
     * @return string
     * @throws SoapFault
     */
    public function RemoveOrdersChangelogRecords($recordIds)
    {
        $request = new Element\RemoveOrdersChangelogRecordsRequest();
        $this->fillRequest($request);

        foreach ((array) $recordIds as $id) {
            $request->addRecordId($id);
        }

        return $this->soapClient->RemoveOrdersChangelogRecords($request)->status;
    }

    /**
     * @return Element\Amenity[]
     * @throws SoapFault
     */
    public function getAmenities()
    {
        $request = new Element\GetAmenitiesRequest();
        $this->fillRequest($request);

        return $this->soapClient->getAmenities($request)->amenities;
    }

    /**
     * Поиск закаов по критериям
     *
     * @param Element\SearchOrderCriterion[] $searchCriteria
     *
     * @return Element\Order[]
     * @throws SoapFault
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

        return $this->soapClient->getServiceMessages($request)->getMessages();
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

        return $this->soapClient->sendServiceMessage($request)->getId();
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
        $response = $this->soapClient->cancelServices($request);

        return $response->services->service;
    }

    /**
     * Обновление referenceId для услуг
     *
     * @param int    $serviceId
     * @param string $referenceId
     *
     * @return Element\UpdateServiceResponse
     * @throws SoapFault
     */
    public function updateService($serviceId, $referenceId)
    {
        $request = new Element\UpdateServiceRequest();
        $this->fillRequest($request);

        $request->serviceId   = $serviceId;
        $request->referenceId = $referenceId;

        /** @var Element\UpdateServiceResponse $response */
        $response = $this->soapClient->updateService($request);

        return $response;
    }

    /**
     * Получить цены за ранный заезд и поздний выезд
     *
     * @param string[] $offerCodes
     *
     * @return Element\OfferCheckinCheckoutPrices[]
     * @throws SoapFault
     */
    public function getCheckinCheckoutPricing(array $offerCodes)
    {
        $request = new Element\GetCheckinCheckoutPricingRequest();
        $this->fillRequest($request);

        $request->offerCodes = $offerCodes;

        /** @var Element\GetCheckinCheckoutPricingResponse $response */
        $response = $this->soapClient->getCheckinCheckoutPricing($request);

        return $response->checkinCheckoutPrices->offerPrices;
    }

    /**
     * Безрейтовый поиск
     *
     * @param string                         $checkinDate
     * @param string                         $checkOutDate
     * @param int|null                       $cityId
     * @param int[]                          $hotelIds
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
        $cityId = null,
        array $hotelIds = [],
        Element\GeoLocation $geolocation = null,
        array $addElements = [],
        array $searchCriteria = []
    )
    {
        $request = new Element\SearchHotelAvailabilityRequest();
        $this->fillRequest($request);

        $request->checkInDate    = $checkinDate;
        $request->checkOutDate   = $checkOutDate;
        $request->currency       = Currencies::RUSSIAN_RUBLE;
        $request->cityId         = $cityId;
        $request->hotelIds       = $hotelIds;
        $request->geolocation    = $geolocation;
        $request->addElements    = $addElements;
        $request->searchCriteria = $searchCriteria;

        /** @var Element\SearchHotelAvailabilityResponse $response */
        $response = $this->soapClient->searchHotelAvailability($request);

        return $response->hotels->hotel;
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
