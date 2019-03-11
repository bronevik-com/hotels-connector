<?php

namespace Bronevik\HotelsConnector\Element;

class AvailableMeals
{
    /**
     * @var AvailableMeal[]
     */
    public $meal = [];

    /**
     * @return bool
     */
    public function hasMeal()
    {
        return count($this->meal) > 0;
    }

    /**
     * @return AvailableMeal[]
     */
    public function getMeal()
    {
        return $this->meal;
    }

    /**
     * @param AvailableMeal $meal
     */
    public function addMeal($meal)
    {
        $this->meal[] = $meal;
    }
}
