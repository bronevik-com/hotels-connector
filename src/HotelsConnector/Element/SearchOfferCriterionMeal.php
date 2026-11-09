<?php

namespace Bronevik\HotelsConnector\Element;

/** Критерий поиска по включённым типам питания; используется логика OR. */
class SearchOfferCriterionMeal extends SearchOfferCriterion
{
    /** @var int[] */
    public $meals = [];

    /** @return int[] */
    public function getMeals()
    {
        return $this->meals;
    }

    /** @param int $meal */
    public function addMeals($meal)
    {
        $this->meals[] = $meal;
    }

    /** @return bool */
    public function hasMeals()
    {
        return count($this->meals) > 0;
    }
}
