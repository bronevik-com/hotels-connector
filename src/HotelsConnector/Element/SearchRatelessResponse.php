<?php
namespace Bronevik\HotelsConnector\Element;

class SearchRatelessResponse extends BaseResponse
{
    /**
     * @var HotelWithCheapestRate[]
     */
    public $hotels = [];
}
