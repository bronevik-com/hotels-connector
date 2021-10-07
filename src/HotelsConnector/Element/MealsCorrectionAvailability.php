<?php


namespace Bronevik\HotelsConnector\Element;

class MealsCorrectionAvailability
{
    /**
     * Доступно ли добавление услуг питания
     * Is the addition of food services available
     *
     * @var boolean
     */
    public $adding;

    /**
     * Доступно ли удаление услуг питания
     * Is it possible to delete food services
     *
     * @var boolean
     */
    public $removing;

    /**
     * @return bool
     */
    public function isAdding()
    {
        return $this->adding;
    }

    /**
     * @param bool $adding
     */
    public function setAdding($adding)
    {
        $this->adding = $adding;
    }

    /**
     * @return bool
     */
    public function isRemoving()
    {
        return $this->removing;
    }

    /**
     * @param bool $removing
     */
    public function setRemoving($removing)
    {
        $this->removing = $removing;
    }
}
