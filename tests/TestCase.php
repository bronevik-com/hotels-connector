<?php

namespace Bronevik\HotelsConnector;

use Bronevik\HotelsConnector;
use Bronevik\HotelsConnector\Enum\Endpoints;
use Bronevik\HotelsConnector\Enum\Languages;

class TestCase extends \PHPUnit_Framework_TestCase
{
    /** @var HotelsConnector */
    protected $connector;

    protected function setUp()
    {
        parent::setUp();

        $connector = new HotelsConnector(Endpoints::LOCAL);
        $connector->setCredentials('test', 'test', '123456');
        $connector->setLanguage(Languages::RUSSIAN);

        $this->connector = $connector;
    }

    /**
     * @param \Bronevik\HotelsConnector\Element\SearchOfferCriterion[] $criteria
     * @param null|string $arrivalDate По умолчанию: завтра
     * @param null|string $departureDate По умолчанию: послезавтра
     * @param int $cityId По умолчанию: id Екатеринбурга
     *
     * @return \Bronevik\HotelsConnector\Element\HotelWithOffers[]
     * @throws \Exception
     */
    protected function findHotels(array $criteria = [], $arrivalDate = null, $departureDate = null, $cityId = 1)
    {
        $arrivalDate   = is_null($arrivalDate) ? date('Y-m-d', strtotime('+1 day')) : $arrivalDate;
        $departureDate = is_null($departureDate) ? date('Y-m-d', strtotime('+2 days')) : $departureDate;

        $hotels = $this->connector->searchHotelOffers(
            $arrivalDate,
            $departureDate,
            $cityId,
            $criteria
        );

        return $hotels;
    }

    /**
     * @param \Bronevik\HotelsConnector\Element\HotelWithOffers[] $hotels
     *
     * @return \Bronevik\HotelsConnector\Element\HotelWithOffers
     */
    protected function getRandomArrayItem(array $hotels)
    {
        return $hotels[rand(0, count($hotels) - 1)];
    }
}
