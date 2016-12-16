<?php
namespace Bronevik\HotelsConnector\Element;

class GetMealsResponse extends BaseResponse
{
    /**
     * Type: tns:Meal
     * 
     * @var \Bronevik\HotelsConnector\Element\Meal[]
     */
    public $meals = [];

    /**
     * 
     * @return bool
     */
    public function hasMeals()
    {
        return count($this->meals) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\Meal[]
     */
    public function getMeals()
    {
        return $this->meals;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\Meal $meals 
     */
    public function addMeals($meals)
    {
        $this->meals[] = $meals;
    }
}

