<?php

namespace Bronevik\HotelsConnector\Element;

class OfferPolicy
{
    /**
     * @var string
     */
    public $description;

    /**
     * @param string $description
     */
    public function __construct($description)
    {
        $this->description = $description;
    }
}