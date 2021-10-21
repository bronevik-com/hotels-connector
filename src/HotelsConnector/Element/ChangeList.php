<?php

namespace Bronevik\HotelsConnector\Element;

class ChangeList
{
    /**
     * @var AbstractChange[]
     */
    public $change = [];

    /**
     * @return bool
     */
    public function hasChange()
    {
        return count($this->change) > 0;
    }

    /**
     * @return AbstractChange[]
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @param AbstractChange $change
     */
    public function addChange($change)
    {
        $this->change[] = $change;
    }
}
