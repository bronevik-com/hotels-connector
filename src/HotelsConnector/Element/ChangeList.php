<?php

namespace Bronevik\HotelsConnector\Element;

class ChangeList
{
    /**
     * Type: tns:Change
     *
     * @var \HBA\Core\Element\Change[]
     */
    public $change = [];

    /**
     *
     * @return bool
     */
    public function hasChange()
    {
        return count($this->change) > 0;
    }

    /**
     *
     * @return \HBA\Core\Element\Change[]
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     *
     * @param \HBA\Core\Element\Change $change
     */
    public function addChange($change)
    {
        $this->change[] = $change;
    }
}

