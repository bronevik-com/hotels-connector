<?php
namespace Bronevik\HotelsConnector\Element;

class AvailableMeals
{
    /**
     * Type: tns:AvailableMeal
     * 
     * @var \Bronevik\HotelsConnector\Element\AvailableMeal[]
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
     * @return \Bronevik\HotelsConnector\Element\AvailableMeal[]
     */
    public function getMeal()
    {
        return $this->meal;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\AvailableMeal $meal
     */
    public function addMeal($meal)
    {
        $this->meal[] = $meal;
    }
}

