<?php

namespace Bronevik\HotelsConnector;

class DictionariesTest extends TestCase
{
    public function testGettingCountriesList()
    {
        $countriesDict = [];
        $countries     = $this->connector->getCountries();
        foreach ($countries as $country) {
            $countriesDict[$country->id] = "{$country->getCode()} {$country->getName()}";
        }

        $this->assertContains('RUS Россия', $countriesDict);
    }

    public function testGettingCitiesOfRussiaList()
    {
        $citiesOfRussiaDict = [];
        $cities             = $this->connector->getCities(1); // Россия
        foreach ($cities as $city) {
            $citiesOfRussiaDict[$city->getId()] = "{$city->getName()} ({$city->getRegionName()})";
        }

        $this->assertContains('Екатеринбург (Свердловская область)', $citiesOfRussiaDict);
    }
}
