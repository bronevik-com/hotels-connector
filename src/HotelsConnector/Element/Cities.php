<?php


namespace Bronevik\HotelsConnector\Element;

class Cities
{
    /**
     * Массив с информацией о городах
     * Array with information about cities
     *
     * @var City[]
     */
    public $city = [];

    /**
     * @return City[]
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param City $city
     */
    public function addCity($city)
    {
        $this->city[] = $city;
    }

    /**
     * @return bool
     */
    public function hasCity()
    {
        return count($this->city) > 0;
    }
}
