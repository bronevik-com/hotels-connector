<?php

namespace Bronevik\HotelsConnector\Element;

class WindowViews
{
    /**
     * Название вида из окна.
     * The name of the view from the window.
     *
     * @var string[]
     */
    public $name = [];

    /**
     * @return bool
     */
    public function hasName()
    {
        return count($this->name) > 0;
    }

    /**
     * @return string[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function addName($name)
    {
        $this->name[] = $name;
    }
}
