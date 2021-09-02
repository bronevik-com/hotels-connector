<?php

namespace Bronevik\HotelsConnector\Element;

class GetCountriesResponse extends BaseResponse
{
    /**
     * @var Countries
     */
    public $countries;

    /**
     * @return Countries
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * @param Countries $countries
     */
    public function setCountries($countries)
    {
        $this->countries = $countries;
    }
}
