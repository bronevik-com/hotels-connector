<?php


namespace Bronevik\HotelsConnector\Element;

class GuestsChange extends AbstractChange
{
    /**
     * @var GuestsChangeValue
     */
    public $newValue;

    /**
     * @return GuestsChangeValue
     */
    public function getNewValue()
    {
        return $this->newValue;
    }

    /**
     * @param GuestsChangeValue $newValue
     */
    public function setNewValue($newValue)
    {
        $this->newValue = $newValue;
    }
}
