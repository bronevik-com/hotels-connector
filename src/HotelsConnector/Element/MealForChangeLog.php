<?php


namespace Bronevik\HotelsConnector\Element;

class MealForChangeLog
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $countPerDay;

    /**
     * @return int
     */
    public function getCountPerDay()
    {
        return $this->countPerDay;
    }

    /**
     * @param int $countPerDay
     */
    public function setCountPerDay($countPerDay)
    {
        $this->countPerDay = $countPerDay;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}
