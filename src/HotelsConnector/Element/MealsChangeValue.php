<?php


namespace Bronevik\HotelsConnector\Element;

class MealsChangeValue
{
    /**
     * @var MealForChangeLog[]
     */
    public $meal;

    /**
     * @param MealForChangeLog $meal
     */
    public function add($meal)
    {
        $this->meal[] = $meal;
    }

    public function hasMeal()
    {
        return count($this->meal) > 0;
    }

    /**
     * @return MealForChangeLog[]
     */
    public function getMeal()
    {
        return $this->meal;
    }

    /**
     * @param MealForChangeLog[] $meal
     */
    public function setMeal($meal)
    {
        $this->meal = $meal;
    }
}
