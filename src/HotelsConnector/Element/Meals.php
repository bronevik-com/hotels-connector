<?php


namespace Bronevik\HotelsConnector\Element;

class Meals
{
    /**
     * @var Meal[]
     */
    public $meal = [];

    /**
     * @return Meal[]
     */
    public function getMeal()
    {
        return $this->meal;
    }

    /**
     * @param Meal $meal
     */
    public function addMeal($meal)
    {
        $this->meal[] = $meal;
    }

    public function hasMeal()
    {
        return count($this->meal) > 0;
    }
}
