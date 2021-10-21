<?php


namespace Bronevik\HotelsConnector\Element;

class MealsChange extends AbstractChange
{
    /**
     * @var MealsChangeValue
     */
    public $newValue;

    /**
     * @return MealsChangeValue
     */
    public function getNewValue()
    {
        return $this->newValue;
    }

    /**
     * @param MealsChangeValue $newValue
     */
    public function setNewValue($newValue)
    {
        $this->newValue = $newValue;
    }
}
