<?php


namespace Bronevik\HotelsConnector\Element;

class EditMeal extends AvailableMeal
{
    public $booked;

    /**
     * @return mixed
     */
    public function getBooked()
    {
        return $this->booked;
    }

    /**
     * @param mixed $booked
     */
    public function setBooked($booked)
    {
        $this->booked = $booked;
    }
}
