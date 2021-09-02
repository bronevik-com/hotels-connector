<?php


namespace Bronevik\HotelsConnector\Element;


class MealIds
{
    /**
     * @var int[]
     */
    public $meals = [];

    /**
     * @param int[] $meals
     */
    public function setMeals($meals)
    {
        $this->meals = $meals;
    }
}
