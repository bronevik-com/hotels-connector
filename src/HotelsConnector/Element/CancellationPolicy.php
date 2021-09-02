<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Правила аннуляции
 * A cancellation policy
 */
abstract class CancellationPolicy
{
    /**
     * Время наступления штрафных санкций.
     * Cancellation date and time (hotel time)
     *
     * @var string
     */
    public $penaltyDateTime;

    /**
     * Детализация штрафа.
     * Detailing of penalty.
     *
     * @var ClientPriceDetails
     */
    public $penaltyPriceDetails;

    public function __construct()
    {
        $this->penaltyPriceDetails = new ClientPriceDetails();
    }

    /**
     * @param string $penaltyDateTime
     */
    public function setPenaltyDateTime($penaltyDateTime)
    {
        $this->penaltyDateTime = $penaltyDateTime;
    }

    /**
     * @return string
     */
    public function getPenaltyDateTime()
    {
        return $this->penaltyDateTime;
    }

    /**
     *
     * @param ClientPriceDetails $penaltyPriceDetails
     */
    public function setPenaltyPriceDetails($penaltyPriceDetails)
    {
        $this->penaltyPriceDetails = $penaltyPriceDetails;
    }

    /**
     *
     * @return ClientPriceDetails
     */
    public function getPenaltyPriceDetails()
    {
        return $this->penaltyPriceDetails;
    }
}
