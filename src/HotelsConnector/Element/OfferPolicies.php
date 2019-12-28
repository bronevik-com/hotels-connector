<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Правила предоставления предложения
 * A policy of granting current offer
 */
class OfferPolicies
{
    /**
     * @deprecated
     * @var string
     */
    public $description;

    /**
     * Правило предоставления предложения.
     *
     * @var OfferPolicy[]
     */
    public $policy = [];

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return bool
     */
    public function hasPolicy()
    {
        return count($this->policy) > 0;
    }

    /**
     * @return OfferPolicy[]
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * @param OfferPolicy $policy
     */
    public function addPolicy($policy)
    {
        $this->policy[] = $policy;
    }
}
