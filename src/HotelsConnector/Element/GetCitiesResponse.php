<?php

namespace Bronevik\HotelsConnector\Element;

class GetCitiesResponse extends BaseResponse
{
    /**
     * @var City[]
     */
    public $cities = [];

    /**
     * @return bool
     */
    public function hasCities()
    {
        return count($this->cities) > 0;
    }

    /**
     * @return City[]
     */
    public function getCities()
    {
        return $this->cities;
    }

    /**
     * @param City $cities
     */
    public function addCities($cities)
    {
        $this->cities[] = $cities;
    }
}
