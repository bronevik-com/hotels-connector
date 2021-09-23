<?php

namespace Bronevik\HotelsConnector\Element;

class GetMealsResponse extends BaseResponse
{
    /**
     * @var Meals
     */
    public $meals;

    /**
     * @return Meals
     */
    public function getMeals()
    {
        return $this->meals;
    }

    /**
     * @param Meals $meals
     */
    public function setMeals($meals)
    {
        $this->meals = $meals;
    }
}
