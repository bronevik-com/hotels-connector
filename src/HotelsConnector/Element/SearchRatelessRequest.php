<?php

namespace Bronevik\HotelsConnector\Element;


class SearchRatelessRequest extends BaseRequest
{
    /**
     * @var string
     */
    public $checkIn;

    /**
     * @var string
     */
    public $checkOut;

    /**
     * @var int
     */
    public $cityId;

}
