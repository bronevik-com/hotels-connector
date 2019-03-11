<?php

namespace Bronevik\HotelsConnector\Element;

class ChangeList
{
    /**
     * @var Change[]
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
     * @return Change[]
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @param Change $change
     */
    public function addChange($change)
    {
        $this->change[] = $change;
    }
}
