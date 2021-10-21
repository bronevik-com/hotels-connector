<?php declare(strict_types=1);


namespace Bronevik\HotelsConnector\Element;


class EditServiceAvailableMeals extends AvailableMeals
{
    /**
     * @var MealsCorrectionAvailability
     */
    public $correctionAvailability;

    /**
     * @return MealsCorrectionAvailability
     */
    public function getCorrectionAvailability()
    {
        return $this->correctionAvailability;
    }

    /**
     * @param MealsCorrectionAvailability $correctionAvailability
     */
    public function setCorrectionAvailability($correctionAvailability)
    {
        $this->correctionAvailability = $correctionAvailability;
    }
}
