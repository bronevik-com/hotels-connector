<?php


namespace Bronevik\HotelsConnector\Element;

class GuestsChangeValue
{
    /**
     * @var Guests
     */
    public $guests;

    /**
     * @return Guests
     */
    public function getGuests()
    {
        return $this->guests;
    }

    /**
     * @param Guests $guests
     */
    public function setGuests($guests)
    {
        $this->guests = $guests;
    }
}
