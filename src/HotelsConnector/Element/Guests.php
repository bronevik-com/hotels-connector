<?php

namespace Bronevik\HotelsConnector\Element;

class Guests
{
    /**
     * Гости
     * Guests
     *
     * @var Guest[]
     */
    public $guest = [];


    /**
     * Дети.
     * Children.
     *
     * @var Children|null
     */
    public $children;

    /**
     * @param Guest $guest
     *
     * @return void
     */
    public function add($guest)
    {
        $this->guest[] = $guest;
    }

    public function hasGuest()
    {
        return count($this->guest) > 0;
    }

    /**
     * @return Guest[]
     */
    public function getGuest()
    {
        return $this->guest;
    }

    /**
     * @param Guest[] $guest
     */
    public function setGuest($guest)
    {
        $this->guest = $guest;
    }

    /**
     * @return bool
     */
    public function hasChildren()
    {
        return !empty($this->children->child);
    }

    /**
     * @return Child[]
     */
    public function getChildren()
    {
        return $this->children === null ? [] : $this->children->child;
    }

    /**
     * @param Child $child
     *
     * @return void
     */
    public function addChild($child)
    {
        if ($this->children === null) {
            $this->children = new Children();
        }

        $this->children->child[] = $child;
    }
}
