<?php
namespace Bronevik\HotelsConnector\Element;

class GetCountriesResponse extends BaseResponse
{
    /**
     * Type: tns:Country
     * 
     * @var \Bronevik\HotelsConnector\Element\Country[]
     */
    public $countries = [];

    /**
     * 
     * @return bool
     */
    public function hasCountries()
    {
        return count($this->countries) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\Country[]
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\Country $countries 
     */
    public function addCountries($countries)
    {
        $this->countries[] = $countries;
    }
}

