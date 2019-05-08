<?php

namespace Bronevik\HotelsConnector\Element;

class Change
{
    /**
     * @var string
     */
    public $element;

    /**
     * @var string
     */
    public $newValue;

    /**
     * @param string $element
     */
    public function setElement($element)
    {
        $this->element = $element;
    }

    /**
     * @return string
     */
    public function getElement()
    {
        return $this->element;
    }

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
