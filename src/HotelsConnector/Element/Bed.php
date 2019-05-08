<?php

namespace Bronevik\HotelsConnector\Element;

class Bed
{
    /**
     * Тип размещения в номере
     * The room type
     *
     * @var string
     */
    public $type;

    /**
     * Количество кроватей
     * Beds count
     *
     * @var int
     */
    public $amount;

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
     * @param int $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }
}
