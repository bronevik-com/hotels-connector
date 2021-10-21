<?php

namespace Bronevik\HotelsConnector\Element;

class GetCitiesResponse extends BaseResponse
{
    /**
     * Информация о городах
     * Information about cities
     *
     * @var Cities
     */
    public $cities;

    /**
     * @return Cities
     */
    public function getCities()
    {
        return $this->cities;
    }

    /**
     * @param Cities $cities
     */
    public function setCities($cities)
    {
        $this->cities = $cities;
    }
}
