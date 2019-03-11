<?php

namespace Bronevik\HotelsConnector\Element;

class GetMealsResponse extends BaseResponse
{
    /**
     * @var Meal[]
     */
    public $meals = [];

    /**
     * @return bool
     */
    public function hasMeals()
    {
        return count($this->meals) > 0;
    }

    /**
     * @return Meal[]
     */
    public function getMeals()
    {
        return $this->meals;
    }

    /**
     * @param Meal $meals
     */
    public function addMeals($meals)
    {
        $this->meals[] = $meals;
    }
}
