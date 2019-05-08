<?php

namespace Bronevik\HotelsConnector\Element;

class BedSets
{
    /**
     * Массив вариантов комбинаций кроватей.
     * An array of options for bed combinations.
     *
     * @var BedSet[]
     */
    public $bedSet = [];

    /**
     * @return bool
     */
    public function hasBedSet()
    {
        return count($this->bedSet) > 0;
    }

    /**
     * @return BedSet[]
     */
    public function getBedSet()
    {
        return $this->bedSet;
    }

    /**
     * @param BedSet $bedSet
     */
    public function addBedSet($bedSet)
    {
        $this->bedSet[] = $bedSet;
    }
}
