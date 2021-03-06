<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Правила предоставления предложения
 * A policy of granting current offer
 */
class OfferPolicy
{
    /**
     * Тип правила предоставления предложения.
     * A type of policy of granting current offer.
     *
     * @var string
     */
    public $type;

    /**
     * Значение правила предоставления предложения.
     * A value of policy of granting current offer.
     *
     * @var string
     */
    public $value;

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
