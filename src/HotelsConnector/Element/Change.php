<?php

namespace Bronevik\HotelsConnector\Element;

class Change extends AbstractChange
{
    /**
     * @var string
     */
    public $newValue;

    /**
     * @param string $newValue
     */
    public function setNewValue($newValue)
    {
        $this->newValue = $newValue;
    }

    /**
     * @return string
     */
    public function getNewValue()
    {
        return $this->newValue;
    }
}
