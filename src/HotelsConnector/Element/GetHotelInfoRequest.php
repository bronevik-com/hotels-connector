<?php

namespace Bronevik\HotelsConnector\Element;

class GetHotelInfoRequest extends BaseRequest
{
    /**
     * @var HotelIds | null
     */
    public $hotelIds;

    /**
     * @var CityIds | null
     */
    public $cityIds;

    public function __construct()
    {
        parent::__construct();
        $this->hotelIds = new HotelIds();
        $this->cityIds  = new CityIds();
    }

    /**
     * @return HotelIds | null
     */
    public function getHotelIds()
    {
        return $this->hotelIds;
    }

    /**
     * @param HotelIds | null $hotelIds
     */
    public function setHotelIds($hotelIds)
    {
        $this->hotelIds = $hotelIds;
    }

    /**
     * @return CityIds | null
     */
    public function getCityIds()
    {
        return $this->cityIds;
    }

    /**
     * @param CityIds | null $cityIds
     */
    public function setCityIds($cityIds)
    {
        $this->cityIds = $cityIds;
    }
}
