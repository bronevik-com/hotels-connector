<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Правила предоставления предложения
 * A policy of granting current offer
 */
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
