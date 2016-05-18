<?php

namespace Bronevik\HotelsConnector;

class OffersSearchTest extends TestCase
{
    public function testSearchOffers()
    {
        $arrivalDate   = date('Y-m-d', strtotime('+1 day'));
        $departureDate = date('Y-m-d', strtotime('+2 days'));
        $cityId        = 1; // Екатеринбург
        $criteria      = [];

        // Фильтрация предложений по категории отеляs
        $criterion = new \Bronevik\HotelsConnector\Element\SearchOfferCriterionHotelCategory;
        $criterion->addCategory(4);
        $criterion->addCategory(5);
        $criteria[] = $criterion;

        // Фильтрация предложений по количеству гостей
        $criterion = new \Bronevik\HotelsConnector\Element\SearchOfferCriterionNumberOfGuests;
        $criterion->setAdults(2);
        $criteria[] = $criterion;

        // Фильтрация предложений по возможности моментального подтверждения бронирования (онлайн)
        $criterion  = new \Bronevik\HotelsConnector\Element\SearchOfferCriterionOnlyOnline;
        $criteria[] = $criterion;

        $hotels = $this->connector->searchHotelOffers(
            $arrivalDate,
            $departureDate,
            $cityId,
            $criteria
        );

        // Проверка найденных предложений указанным выше критериям
        foreach ($hotels as $hotel) {
            // Проверяем, что у отеля 4 или 5 звёзд
            $this->assertTrue(in_array($hotel->getCategory(), [4, 5]));

            foreach ($hotel->getOffers() as $offer) {
                // Проверяем, что в номер рассчитан на двоих
                $this->assertEquals(2, $offer->getRoomCapacity());

                // Проверяем, что номер доступен для моментального бронирования (онлайн)
                $this->assertTrue($offer->getImmediateConfirmation());
            }
        }
    }

    public function testSearchOffersByHotelName()
    {
        $arrivalDate   = date('Y-m-d', strtotime('+1 day'));
        $departureDate = date('Y-m-d', strtotime('+2 days'));
        $cityId        = 1; // Екатеринбург
        $criteria      = [];

        // Фильтрация предложений по названию отеля
        $hotelName = $this->getRandomArrayItem($this->findHotels())->getName();
        $criterion = new \Bronevik\HotelsConnector\Element\SearchOfferCriterionHotelName;
        $criterion->setName($hotelName);
        $criteria[] = $criterion;

        $hotels = $this->connector->searchHotelOffers(
            $arrivalDate,
            $departureDate,
            $cityId,
            $criteria
        );

        // Проверка имён найденых отелей на вхождение имени, по которому запускался поиск
        foreach ($hotels as $hotel) {
            $this->assertNotFalse(stripos($hotel->getName(), $hotelName));
        }
    }
}
