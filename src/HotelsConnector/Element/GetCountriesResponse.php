<?php

namespace Bronevik\HotelsConnector\Element;

class GetCountriesResponse extends BaseResponse
{
    /**
     * @var Country[]
     */
    public $countries = [];

    /**
     * @return bool
     */
    public function hasCountries()
    {
        return count($this->countries) > 0;
    }

    /**
     * @return Country[]
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * @param Country $countries
     */
    public function addCountries($countries)
    {
        $this->countries[] = $countries;
    }
}
