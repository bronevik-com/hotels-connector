<?php

namespace Bronevik\HotelsConnector\Element;

abstract class AbstractChange
{
    /**
     * @var string
     */
    public $element;

    /**
     * @return string
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * @param string $element
     */
    public function setElement($element)
    {
        $this->element = $element;
    }
}
