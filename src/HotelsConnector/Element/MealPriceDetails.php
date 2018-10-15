<?php

namespace Bronevik\HotelsConnector\Element;

class MealPriceDetails extends ClientPriceDetails
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var boolean
     */
    public $included;

    /**
     * MealPriceDetails constructor.
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->id         = null;
        $this->gross      = new DetailedPrice;
        $this->net        = new DetailedPrice;
        $this->commission = new DetailedPrice;
        $this->included   = null;
    }
}
