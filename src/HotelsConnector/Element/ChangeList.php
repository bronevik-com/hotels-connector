<?php
namespace Bronevik\HotelsConnector\Element;

class ChangeList
{
    /**
     * Type: tns:Change
     * 
     * @var \Bronevik\HotelsConnector\Element\Change[]
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
     * @return \Bronevik\HotelsConnector\Element\Change[]
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\Change $change 
     */
    public function addChange($change)
    {
        $this->change[] = $change;
    }
}

