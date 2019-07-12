<?php

namespace Bronevik\HotelsConnector\Element;

class AddElements
{
    /**
     * Дополнительная информация в ответе.
     * Additional information in response.
     *
     * @var string[]
     */
    public $addElement = [];

    /**
     * @return bool
     */
    public function hasAddElement()
    {
        return count($this->addElement) > 0;
    }

    /**
     * @return string[]
     */
    public function getAddElement()
    {
        return $this->addElement;
    }

    /**
     * @param string $addElement
     */
    public function addAddElement($addElement)
    {
        $this->addElement[] = $addElement;
    }
}
