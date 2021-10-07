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
    public $guest;

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
}
