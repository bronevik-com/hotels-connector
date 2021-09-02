<?php


namespace Bronevik\HotelsConnector\Element;

class Countries
{
    /**
     * @var Country[]
     */
    public $country = [];

    /**
     * @return Country[]
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param Country[] $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @param Country $country
     */
    public function addCountry($country)
    {
        $this->country[] = $country;
    }

    public function hasCountry()
    {
        return count($this->country) > 0;
    }
}
