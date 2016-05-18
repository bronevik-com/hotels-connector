<?php
namespace Bronevik\HotelsConnector\Element;

/**
 * Правила аннуляции
 * 
 */
abstract class CancellationPolicy
{
    /**
     * Время наступления штрафных санкций.
     * Type: xsd:dateTime
     * 
     * @var string
     */
    public $penaltyDateTime = null;

    /**
     * Размер штрафа
     * Type: xsd:float
     * 
     * @var float
     */
    public $penaltySum = null;

    /**
     * 
     * @param string $penaltyDateTime 
     */
    public function setPenaltyDateTime($penaltyDateTime)
    {
        $this->penaltyDateTime = $penaltyDateTime;
    }

    /**
     * 
     * @return string
     */
    public function getPenaltyDateTime()
    {
        return $this->penaltyDateTime;
    }

    /**
     * 
     * @param float $penaltySum 
     */
    public function setPenaltySum($penaltySum)
    {
        $this->penaltySum = $penaltySum;
    }

    /**
     * 
     * @return float
     */
    public function getPenaltySum()
    {
        return $this->penaltySum;
    }
}

