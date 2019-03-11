<?php

namespace Bronevik\HotelsConnector\Element;

class GetHotelInfoRequest extends BaseRequest
{
    /**
     * @var int[]
     */
    public $hotelId = [];

    /**
     * @return bool
     */
    public function hasHotelId()
    {
        return count($this->hotelId) > 0;
    }

    /**
     * @return int[]
     */
    public function getHotelId()
    {
        return $this->hotelId;
    }

    /**
     * @param int $hotelId
     */
    public function addHotelId($hotelId)
    {
        $this->hotelId[] = $hotelId;
    }
}
