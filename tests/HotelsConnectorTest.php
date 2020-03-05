<?php

namespace Bronevik\Tests;

use Bronevik\HotelsConnector\Element\Amenity;
use Bronevik\HotelsConnector\Element\BaseRequest;
use Bronevik\HotelsConnector\Element\BaseResponse;
use Bronevik\HotelsConnector\Element\CancelledService;
use Bronevik\HotelsConnector\Element\CancelledServices;
use Bronevik\HotelsConnector\Element\CancelOrderRequest;
use Bronevik\HotelsConnector\Element\CancelOrderResponse;
use Bronevik\HotelsConnector\Element\CancelServicesRequest;
use Bronevik\HotelsConnector\Element\CancelServicesResponse;
use Bronevik\HotelsConnector\Element\City;
use Bronevik\HotelsConnector\Element\Country;
use Bronevik\HotelsConnector\Element\CreateOrderRequest;
use Bronevik\HotelsConnector\Element\CreateOrderResponse;
use Bronevik\HotelsConnector\Element\CreateOrderWithCardDetailsRequest;
use Bronevik\HotelsConnector\Element\CreateOrderWithCardDetailsResponse;
use Bronevik\HotelsConnector\Element\GeoLocation;
use Bronevik\HotelsConnector\Element\GetAmenitiesRequest;
use Bronevik\HotelsConnector\Element\GetAmenitiesResponse;
use Bronevik\HotelsConnector\Element\GetCheckinCheckoutPricingRequest;
use Bronevik\HotelsConnector\Element\GetCheckinCheckoutPricingResponse;
use Bronevik\HotelsConnector\Element\GetCitiesRequest;
use Bronevik\HotelsConnector\Element\GetCitiesResponse;
use Bronevik\HotelsConnector\Element\GetCountriesRequest;
use Bronevik\HotelsConnector\Element\GetCountriesResponse;
use Bronevik\HotelsConnector\Element\GetHotelInfoRequest;
use Bronevik\HotelsConnector\Element\GetHotelInfoResponse;
use Bronevik\HotelsConnector\Element\GetHotelOfferPricingRequest;
use Bronevik\HotelsConnector\Element\GetHotelOfferPricingResponse;
use Bronevik\HotelsConnector\Element\GetHotelOfferRequest;
use Bronevik\HotelsConnector\Element\GetHotelOfferResponse;
use Bronevik\HotelsConnector\Element\GetMealsRequest;
use Bronevik\HotelsConnector\Element\GetMealsResponse;
use Bronevik\HotelsConnector\Element\GetOrderRequest;
use Bronevik\HotelsConnector\Element\GetOrderResponse;
use Bronevik\HotelsConnector\Element\GetOrdersChangelogRequest;
use Bronevik\HotelsConnector\Element\GetOrdersChangelogResponse;
use Bronevik\HotelsConnector\Element\GetServiceMessagesRequest;
use Bronevik\HotelsConnector\Element\GetServiceMessagesResponse;
use Bronevik\HotelsConnector\Element\HotelIds;
use Bronevik\HotelsConnector\Element\HotelOffer;
use Bronevik\HotelsConnector\Element\Hotels;
use Bronevik\HotelsConnector\Element\HotelsWithCheapestOffer;
use Bronevik\HotelsConnector\Element\HotelWithCheapestOffer;
use Bronevik\HotelsConnector\Element\HotelWithInfo;
use Bronevik\HotelsConnector\Element\Meal;
use Bronevik\HotelsConnector\Element\Messages;
use Bronevik\HotelsConnector\Element\OfferCheckinCheckoutPrices;
use Bronevik\HotelsConnector\Element\OffersCheckinCheckoutPrices;
use Bronevik\HotelsConnector\Element\Order;
use Bronevik\HotelsConnector\Element\OrdersChangelogRecord;
use Bronevik\HotelsConnector\Element\OrderServiceAccommodation;
use Bronevik\HotelsConnector\Element\PingRequest;
use Bronevik\HotelsConnector\Element\PingResponse;
use Bronevik\HotelsConnector\Element\RemoveOrdersChangelogRecordsRequest;
use Bronevik\HotelsConnector\Element\RemoveOrdersChangelogRecordsResponse;
use Bronevik\HotelsConnector\Element\SearchHotelAvailabilityRequest;
use Bronevik\HotelsConnector\Element\SearchHotelAvailabilityResponse;
use Bronevik\HotelsConnector\Element\SearchHotelOffersRequest;
use Bronevik\HotelsConnector\Element\SearchHotelOffersResponse;
use Bronevik\HotelsConnector\Element\SearchOfferCriterionOnlyOnline;
use Bronevik\HotelsConnector\Element\SearchOrderCriterionGuest;
use Bronevik\HotelsConnector\Element\SearchOrdersRequest;
use Bronevik\HotelsConnector\Element\SearchOrdersResponse;
use Bronevik\HotelsConnector\Element\SendServiceMessageRequest;
use Bronevik\HotelsConnector\Element\SendServiceMessageResponse;
use Bronevik\HotelsConnector\Element\ServiceAccommodation;
use Bronevik\HotelsConnector\Element\ServiceMessages;
use Bronevik\HotelsConnector\Element\SkipElements;
use Bronevik\HotelsConnector\Element\UpdateServiceRequest;
use Bronevik\HotelsConnector\Element\UpdateServiceResponse;
use Bronevik\HotelsConnector\Enum\Currencies;
use Bronevik\HotelsConnector\Enum\Operations;
use Bronevik\Tests\Mock\HotelsConnectorMock;
use PHPUnit\Framework\TestCase;
use PHPUnit_Framework_MockObject_MockObject;
use SoapClient;
use SoapFault;

/**
 * @group unit
 */
class HotelsConnectorTest extends TestCase
{
    /**
     * @param string       $operation
     * @param BaseRequest  $request
     * @param BaseResponse $response
     *
     * @return PHPUnit_Framework_MockObject_MockObject|SoapClient
     */
    private function getSoapClient($operation, $request, $response)
    {
        $baseClient = $this->createMock(SoapClient::class);
        // Assert
        $baseClient
            ->expects($this->once())
            ->method('__call')
            ->with($operation, [$request])
            ->willReturn($response);

        return $baseClient;
    }

    /**
     * @param SoapClient $baseClient
     * @param SoapClient $additionalClient
     *
     * @return HotelsConnectorMock
     */
    private function getHotelsConnector($baseClient = null, $additionalClient = null)
    {
        $connector = new HotelsConnectorMock();

        if ($baseClient) {
            $connector->setBaseClient($baseClient);
        }

        if ($additionalClient) {
            $connector->setSecureClient($additionalClient);
        }

        return $connector;
    }

    /**
     * @throws SoapFault
     */
    public function testGetHotelOfferPricing()
    {
        // Arrange
        $services         = [new ServiceAccommodation()];
        $responseServices = [new OrderServiceAccommodation()];

        $request           = new GetHotelOfferPricingRequest();
        $request->services = $services;

        $response           = new GetHotelOfferPricingResponse();
        $response->services = $responseServices;

        $baseClient      = $this->getSoapClient(Operations::GET_HOTEL_OFFER_PRICING, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->getHotelOfferPricing($services);

        // Assert
        $this->assertEquals($responseServices, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testSendServiceMessage()
    {
        // Arrange
        $serviceId   = 1;
        $messageText = 'text';
        $messageId   = 123;

        $request            = new SendServiceMessageRequest();
        $request->serviceId = $serviceId;
        $request->text      = $messageText;

        $response     = new SendServiceMessageResponse();
        $response->id = $messageId;

        $baseClient      = $this->getSoapClient(Operations::SEND_SERVICE_MESSAGE, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->sendServiceMessage($serviceId, $messageText);

        // Assert
        $this->assertEquals($messageId, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testSearchHotelOffers_byGeolocation()
    {
        // Arrange
        $arrivalDate    = '2019-12-30';
        $departureDate  = '2019-12-31';
        $cityId         = null;
        $searchCriteria = [new SearchOfferCriterionOnlyOnline()];
        $hotelIds       = [];
        $skipElements   = ['skipElement'];
        $geolocation    = new GeoLocation();
        $hotels         = new Hotels();

        $request                        = new SearchHotelOffersRequest();
        $request->currency              = Currencies::RUSSIAN_RUBLE;
        $request->arrivalDate           = $arrivalDate;
        $request->departureDate         = $departureDate;
        $request->skipElements          = new SkipElements();
        $request->skipElements->element = $skipElements;
        $request->geolocation           = $geolocation;
        $request->searchCriteria        = $searchCriteria;

        $response         = new SearchHotelOffersResponse();
        $response->hotels = $hotels;

        $baseClient      = $this->getSoapClient(Operations::SEARCH_HOTEL_OFFERS, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->searchHotelOffers(
            $arrivalDate,
            $departureDate,
            $cityId,
            $searchCriteria,
            $hotelIds,
            $skipElements,
            $geolocation
        );

        // Assert
        $this->assertEquals($hotels, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testSearchHotelOffers_byHotelIds()
    {
        // Arrange
        $arrivalDate    = '2019-12-30';
        $departureDate  = '2019-12-31';
        $cityId         = null;
        $searchCriteria = [];
        $hotelIds       = [1, 2];
        $hotels         = new Hotels();

        $request                 = new SearchHotelOffersRequest();
        $request->currency       = Currencies::RUSSIAN_RUBLE;
        $request->arrivalDate    = $arrivalDate;
        $request->departureDate  = $departureDate;
        $request->searchCriteria = $searchCriteria;
        $request->hotelIds       = new HotelIds();
        $request->hotelIds->id   = $hotelIds;

        $response         = new SearchHotelOffersResponse();
        $response->hotels = $hotels;

        $baseClient      = $this->getSoapClient(Operations::SEARCH_HOTEL_OFFERS, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->searchHotelOffers(
            $arrivalDate,
            $departureDate,
            $cityId,
            $searchCriteria,
            $hotelIds
        );

        // Assert
        $this->assertEquals($hotels, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testSearchHotelOffers_byCityId()
    {
        // Arrange
        $arrivalDate   = '2019-12-30';
        $departureDate = '2019-12-31';
        $cityId        = 1;
        $hotels        = new Hotels();

        $request                = new SearchHotelOffersRequest();
        $request->currency      = Currencies::RUSSIAN_RUBLE;
        $request->arrivalDate   = $arrivalDate;
        $request->departureDate = $departureDate;
        $request->cityId        = $cityId;

        $response         = new SearchHotelOffersResponse();
        $response->hotels = $hotels;

        $baseClient      = $this->getSoapClient(Operations::SEARCH_HOTEL_OFFERS, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->searchHotelOffers(
            $arrivalDate,
            $departureDate,
            $cityId
        );

        // Assert
        $this->assertEquals($hotels, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testGetCountries()
    {
        // Arrange
        $request = new GetCountriesRequest();

        $expectedCountries = [new Country()];

        $response            = new GetCountriesResponse();
        $response->countries = $expectedCountries;

        $baseClient      = $this->getSoapClient(Operations::GET_COUNTRIES, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->getCountries();

        // Assert
        $this->assertEquals($expectedCountries, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testSearchHotelAvailability_byCityId()
    {
        // Arrange
        $checkinDate  = '2019-12-30';
        $checkOutDate = '2019-12-31';
        $cityId       = 1;
        $hotels       = [new HotelWithCheapestOffer()];

        $request               = new SearchHotelAvailabilityRequest();
        $request->currency     = Currencies::RUSSIAN_RUBLE;
        $request->checkInDate  = $checkinDate;
        $request->checkOutDate = $checkOutDate;
        $request->cityId       = $cityId;
        $request->addElements  = [];
        $request->hotelIds     = [];

        $response                = new SearchHotelAvailabilityResponse();
        $response->hotels        = new HotelsWithCheapestOffer();
        $response->hotels->hotel = $hotels;

        $baseClient      = $this->getSoapClient(Operations::SEARCH_HOTEL_AVAILABILITY, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->searchHotelAvailability(
            $checkinDate,
            $checkOutDate,
            $cityId
        );

        // Assert
        $this->assertEquals($hotels, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testSearchHotelAvailability_byHotelIds()
    {
        // Arrange
        $checkinDate  = '2019-12-30';
        $checkOutDate = '2019-12-31';
        $cityId       = null;
        $hotelIds     = [1, 2];
        $hotels       = [new HotelWithCheapestOffer()];

        $request               = new SearchHotelAvailabilityRequest();
        $request->currency     = Currencies::RUSSIAN_RUBLE;
        $request->checkInDate  = $checkinDate;
        $request->checkOutDate = $checkOutDate;
        $request->addElements  = [];
        $request->hotelIds     = $hotelIds;

        $response                = new SearchHotelAvailabilityResponse();
        $response->hotels        = new HotelsWithCheapestOffer();
        $response->hotels->hotel = $hotels;

        $baseClient      = $this->getSoapClient(Operations::SEARCH_HOTEL_AVAILABILITY, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->searchHotelAvailability(
            $checkinDate,
            $checkOutDate,
            $cityId,
            $hotelIds
        );

        // Assert
        $this->assertEquals($hotels, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testSearchHotelAvailability_byGeolocation()
    {
        // Arrange
        $checkinDate    = '2019-12-30';
        $checkOutDate   = '2019-12-31';
        $cityId         = null;
        $geolocation    = new GeoLocation();
        $addElements    = ['addElement'];
        $searchCriteria = [new SearchOfferCriterionOnlyOnline()];
        $hotels         = [new HotelWithCheapestOffer()];

        $request                 = new SearchHotelAvailabilityRequest();
        $request->currency       = Currencies::RUSSIAN_RUBLE;
        $request->checkInDate    = $checkinDate;
        $request->checkOutDate   = $checkOutDate;
        $request->addElements    = [];
        $request->hotelIds       = [];
        $request->geolocation    = $geolocation;
        $request->searchCriteria = $searchCriteria;
        $request->addElements    = $addElements;

        $response                = new SearchHotelAvailabilityResponse();
        $response->hotels        = new HotelsWithCheapestOffer();
        $response->hotels->hotel = $hotels;

        $baseClient      = $this->getSoapClient(Operations::SEARCH_HOTEL_AVAILABILITY, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->searchHotelAvailability(
            $checkinDate,
            $checkOutDate,
            $cityId,
            [],
            $geolocation,
            $addElements,
            $searchCriteria
        );

        // Assert
        $this->assertEquals($hotels, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testGetCheckinCheckoutPricing()
    {
        // Arrange
        $offerCodes                 = ['offerCode'];
        $offerCheckinCheckoutPrices = [new OfferCheckinCheckoutPrices()];

        $request             = new GetCheckinCheckoutPricingRequest();
        $request->offerCodes = $offerCodes;

        $response                                     = new GetCheckinCheckoutPricingResponse();
        $response->checkinCheckoutPrices              = new OffersCheckinCheckoutPrices();
        $response->checkinCheckoutPrices->offerPrices = $offerCheckinCheckoutPrices;

        $baseClient      = $this->getSoapClient(Operations::GET_CHECKIN_CHECKOUT_PRICING, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->getCheckinCheckoutPricing($offerCodes);

        // Assert
        $this->assertEquals($offerCheckinCheckoutPrices, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testGetMeals()
    {
        // Arrange
        $request = new GetMealsRequest();

        $expectedMeals = [new Meal()];

        $response        = new GetMealsResponse();
        $response->meals = $expectedMeals;

        $baseClient      = $this->getSoapClient(Operations::GET_MEALS, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->getMeals();

        // Assert
        $this->assertEquals($expectedMeals, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testCancelOrder()
    {
        // Arrange
        $orderId = 1;
        $result  = true;

        $request          = new CancelOrderRequest();
        $request->orderId = $orderId;

        $response         = new CancelOrderResponse();
        $response->result = $result;

        $baseClient      = $this->getSoapClient(Operations::CANCEL_ORDER, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->cancelOrder($orderId);

        // Assert
        $this->assertEquals($result, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testGetServiceMessages()
    {
        // Arrange
        $serviceId  = 1;
        $messageIds = [1, 2];
        $messages   = new Messages();

        $request                      = new GetServiceMessagesRequest();
        $request->serviceId           = $serviceId;
        $request->serviceMessages     = new ServiceMessages();
        $request->serviceMessages->id = $messageIds;

        $response           = new GetServiceMessagesResponse();
        $response->messages = $messages;

        $baseClient      = $this->getSoapClient(Operations::GET_SERVICE_MESSAGES, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->getServiceMessages($serviceId, $messageIds);

        // Assert
        $this->assertEquals($messages, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testGetCities()
    {
        // Arrange
        $countryId = 1;

        $request            = new GetCitiesRequest();
        $request->countryId = $countryId;

        $expectedCities = [new City()];

        $response         = new GetCitiesResponse();
        $response->cities = $expectedCities;

        $baseClient      = $this->getSoapClient(Operations::GET_CITIES, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->getCities($countryId);

        // Assert
        $this->assertEquals($expectedCities, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testGetAmenities()
    {
        // Arrange
        $request = new GetAmenitiesRequest();

        $expectedAmenities = [new Amenity()];

        $response            = new GetAmenitiesResponse();
        $response->amenities = $expectedAmenities;

        $baseClient      = $this->getSoapClient(Operations::GET_AMENITIES, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->getAmenities();

        // Assert
        $this->assertEquals($expectedAmenities, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testGetHotelOffer()
    {
        // Arrange
        $offerCode    = 'offerCode';
        $skipElements = ['skipElement'];
        $offer        = new HotelOffer();

        $request                        = new GetHotelOfferRequest();
        $request->offerCode             = [$offerCode];
        $request->skipElements          = new SkipElements();
        $request->skipElements->element = $skipElements;

        $response        = new GetHotelOfferResponse();
        $response->offer = $offer;

        $baseClient      = $this->getSoapClient(Operations::GET_HOTEL_OFFER, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->getHotelOffer($offerCode, $skipElements);

        // Assert
        $this->assertEquals($offer, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testCreateOrder()
    {
        // Arrange
        $order = new Order();

        $request = new CreateOrderRequest();

        $response        = new CreateOrderResponse();
        $response->order = $order;

        $baseClient      = $this->getSoapClient(Operations::CREATE_ORDER, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->createOrder($request);

        // Assert
        $this->assertEquals($order, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testPing()
    {
        // Arrange
        $pingWord = 'ping';

        $request       = new PingRequest();
        $request->data = $pingWord;

        $response       = new PingResponse();
        $response->data = $pingWord;

        $baseClient      = $this->getSoapClient(Operations::PING, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->ping($pingWord);

        // Assert
        $this->assertEquals($pingWord, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testRemoveOrdersChangelogRecords()
    {
        // Arrange
        $recordIds = [1, 2, 3];
        $status    = true;

        $request           = new RemoveOrdersChangelogRecordsRequest();
        $request->recordId = $recordIds;

        $response         = new RemoveOrdersChangelogRecordsResponse();
        $response->status = $status;

        $baseClient      = $this->getSoapClient(Operations::REMOVE_ORDERS_CHANGELOG_RECORDS, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->removeOrdersChangelogRecords($recordIds);

        // Assert
        $this->assertEquals($status, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testGetOrdersChangelog()
    {
        // Arrange
        $records = [new OrdersChangelogRecord()];

        $request = new GetOrdersChangelogRequest();

        $response                        = new GetOrdersChangelogResponse();
        $response->ordersChangelogRecord = $records;

        $baseClient      = $this->getSoapClient(Operations::GET_ORDERS_CHANGELOG, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->getOrdersChangelog();

        // Assert
        $this->assertEquals($records, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testCancelServices()
    {
        // Arrange
        $serviceIds                          = [1, 2, 3];
        $cancellationServiceResults          = [new CancelledService()];
        $cancellationServicesResult          = new CancelledServices();
        $cancellationServicesResult->service = $cancellationServiceResults;

        $request             = new CancelServicesRequest();
        $request->serviceIds = $serviceIds;

        $response           = new CancelServicesResponse();
        $response->services = $cancellationServicesResult;

        $baseClient      = $this->getSoapClient(Operations::CANCEL_SERVICES, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->cancelServices($serviceIds);

        // Assert
        $this->assertEquals($cancellationServiceResults, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testGetOrder()
    {
        // Arrange
        $orderId = 1;
        $order   = new Order();

        $request          = new GetOrderRequest();
        $request->orderId = $orderId;

        $response        = new GetOrderResponse();
        $response->order = $order;

        $baseClient      = $this->getSoapClient(Operations::GET_ORDER, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->getOrder($orderId);

        // Assert
        $this->assertEquals($order, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testGetHotelInfo()
    {
        // Arrange
        $hotelIds = [1];
        $hotels   = [new HotelWithInfo()];

        $request          = new GetHotelInfoRequest();
        $request->hotelId = $hotelIds;

        $response         = new GetHotelInfoResponse();
        $response->hotels = $hotels;

        $baseClient      = $this->getSoapClient(Operations::GET_HOTEL_INFO, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->getHotelInfo($hotelIds);

        // Assert
        $this->assertEquals($hotels, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testSearchOrders()
    {
        // Arrange
        $searchCriteriaGuestName       = new SearchOrderCriterionGuest();
        $searchCriteriaGuestName->name = 'guestName';

        $criteria = [$searchCriteriaGuestName];
        $orders   = [new Order()];

        $request                 = new SearchOrdersRequest();
        $request->searchCriteria = $criteria;

        $response         = new SearchOrdersResponse();
        $response->orders = $orders;

        $baseClient      = $this->getSoapClient(Operations::SEARCH_ORDERS, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->searchOrders($criteria);

        // Assert
        $this->assertEquals($orders, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testUpdateService()
    {
        // Arrange
        $serviceId = 1;
        $refenceId = 'refenceId';

        $request              = new UpdateServiceRequest();
        $request->serviceId   = $serviceId;
        $request->referenceId = $refenceId;

        $response              = new UpdateServiceResponse();
        $response->result      = true;
        $response->referenceId = $refenceId;

        $baseClient      = $this->getSoapClient(Operations::UPDATE_SERVICE, $request, $response);
        $hotelsConnector = $this->getHotelsConnector($baseClient);

        // Act
        $apiResponse = $hotelsConnector->updateService($serviceId, $refenceId);

        // Assert
        $this->assertEquals($response, $apiResponse);
    }

    /**
     * @throws SoapFault
     */
    public function testCreateOrderWithCardDetails()
    {
        // Arrange
        $order = new Order();

        $request = new CreateOrderWithCardDetailsRequest();

        $response        = new CreateOrderWithCardDetailsResponse();
        $response->order = $order;

        $additionalClient = $this->getSoapClient(Operations::CREATE_ORDER_WITH_CARD_DETAILS, $request, $response);
        $hotelsConnector  = $this->getHotelsConnector(null, $additionalClient);

        // Act
        $apiResponse = $hotelsConnector->createOrderWithCardDetails($request);

        // Assert
        $this->assertEquals($order, $apiResponse);
    }
}
