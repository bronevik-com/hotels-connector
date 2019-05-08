<?php

namespace Bronevik\HotelsConnector\Element;

class DailyPriceMeals
{
    /**
     * Детализированная информация о стоимости питания
     * The detailed cost of paid meal service
     *
     * @var MealPriceDetails[]
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
     * @return MealPriceDetails[]
     */
    public function getMeal()
    {
        return $this->meal;
    }

    /**
     * @param MealPriceDetails $meal
     */
    public function addMeal($meal)
    {
        $this->meal[] = $meal;
    }
}
