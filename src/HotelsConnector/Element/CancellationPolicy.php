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
     * Размер штрафа
     * An amount of penalty
     *
     * @var float
     */
    public $penaltySum;

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
     * @param float $penaltySum
     */
    public function setPenaltySum($penaltySum)
    {
        $this->penaltySum = $penaltySum;
    }

    /**
     * @return float
     */
    public function getPenaltySum()
    {
        return $this->penaltySum;
    }
}
