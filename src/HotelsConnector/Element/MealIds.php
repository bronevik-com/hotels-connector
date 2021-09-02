<?php


namespace Bronevik\HotelsConnector\Element;

class MealIds
{
    /**
     * Массив с идентификаторами услуг питания
     * Array with meals service identifiers
     *
     * @var int[]
     */
    public $meals = [];

    /**
     * @return int[]
     */
    public function getMeals()
    {
        return $this->meals;
    }

    /**
     * @param int $meal
     */
    public function addMeal($meal)
    {
        $this->meals[] = $meal;
    }

    public function hasMeal()
    {
        return count($this->meals) > 0;
    }
}
