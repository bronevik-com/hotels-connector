<?php

namespace Bronevik\HotelsConnector\Element;

class BedSet
{
    /**
     * Вариант размещения кроватей.
     * The option of beds combinations.
     *
     * @var Bed[]
     */
    public $bed = [];

    /**
     * @return bool
     */
    public function hasBed()
    {
        return count($this->bed) > 0;
    }

    /**
     * @return Bed[]
     */
    public function getBed()
    {
        return $this->bed;
    }

    /**
     * @param Bed $bed
     */
    public function addBed($bed)
    {
        $this->bed[] = $bed;
    }
}
