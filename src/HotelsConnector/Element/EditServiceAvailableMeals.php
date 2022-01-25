<?php


namespace Bronevik\HotelsConnector\Element;

class EditServiceAvailableMeals extends AvailableMeals
{
    /**
     * @var MealsCorrectionAvailability | null
     */
    public $correctionAvailability;

    /**
     * @return MealsCorrectionAvailability | null
     */
    public function getCorrectionAvailability()
    {
        return $this->correctionAvailability;
    }

    /**
     * @param MealsCorrectionAvailability | null $correctionAvailability
     */
    public function setCorrectionAvailability($correctionAvailability)
    {
        $this->correctionAvailability = $correctionAvailability;
    }
}
