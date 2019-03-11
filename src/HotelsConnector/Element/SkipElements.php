<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Пропустить элементы
 * Skip elements
 */
class SkipElements
{
    /**
     * @var string[]
     */
    public $element = [];

    /**
     * @return bool
     */
    public function hasElement()
    {
        return count($this->element) > 0;
    }

    /**
     * @return string[]
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * @param string $element
     */
    public function addElement($element)
    {
        $this->element[] = $element;
    }
}
