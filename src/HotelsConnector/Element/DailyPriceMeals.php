<?php

namespace Bronevik\HotelsConnector\Element;

class DailyPriceMeals
{
    /**
     * Type: tns:MealPriceDetails
     *
     * @var MealPriceDetails[]
     */
    public $meal = [];

    /**
     *
     * @return bool
     */
    public function hasMeal()
    {
        return count($this->meal) > 0;
    }
}
