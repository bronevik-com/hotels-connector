<?php

namespace Bronevik\HotelsConnector\Element;

class GetHotelInfoRequest extends BaseRequest
{
    /**
     * @var HotelIds
     */
    public $hotelIds;

    public function __construct()
    {
        parent::__construct();
        $this->hotelIds = new HotelIds();
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
}
