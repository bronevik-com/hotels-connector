<?php
namespace Bronevik\HotelsConnector\Element;

class DailyPriceMeals
{
    /**
     * Детализированная информация о стоимости питания
     * The detailed cost of paid meal service
     * Type: tns:MealPriceDetails
     * 
     * @var \Bronevik\HotelsConnector\Element\MealPriceDetails[]
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

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\MealPriceDetails[]
     */
    public function getMeal()
    {
        return $this->meal;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\MealPriceDetails $meal 
     */
    public function addMeal($meal)
    {
        $this->meal[] = $meal;
    }
}

