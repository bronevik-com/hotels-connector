<?php

namespace Bronevik\HotelsConnector\Element;

class GetHotelInfoRequest extends BaseRequest
{
    /**
     * @var HotelIds
     */
    public $hotelIds;

    /**
     * @var CityIds
     */
    public $cityIds;

    public function __construct()
    {
        parent::__construct();
        $this->hotelIds = new HotelIds();
        $this->cityIds  = new CityIds();
    }

    /**
     * @return HotelIds
     */
    public function getHotelIds()
    {
        return $this->hotelIds;
    }

    /**
     * @param HotelIds $hotelIds
     */
    public function setHotelIds($hotelIds)
    {
        $this->hotelIds = $hotelIds;
    }

    /**
     * @return CityIds
     */
    public function getCityIds()
    {
        return $this->cityIds;
    }

    /**
     * @param CityIds $cityIds
     */
    public function setCityIds($cityIds)
    {
        $this->cityIds = $cityIds;
    }
}
