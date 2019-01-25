<?php
namespace Bronevik\HotelsConnector\Element;

/**
 * Правила предоставления предложения
 * A policy of granting current offer
 * 
 */
class OfferPolicy
{
    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $description = null;

    /**
     * 
     * @param string $description 
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * 
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}

