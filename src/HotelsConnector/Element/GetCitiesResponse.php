<?php
namespace Bronevik\HotelsConnector\Element;

class GetCitiesResponse extends BaseResponse
{
    /**
     * Type: tns:City
     * 
     * @var \Bronevik\HotelsConnector\Element\City[]
     */
    public $cities = [];

    /**
     * 
     * @return bool
     */
    public function hasCities()
    {
        return count($this->cities) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\City[]
     */
    public function getCities()
    {
        return $this->cities;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\City $cities 
     */
    public function addCities($cities)
    {
        $this->cities[] = $cities;
    }
}

