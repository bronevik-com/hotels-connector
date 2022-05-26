<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Ребенок для запроса
 * Child for request
 */
class Child
{
    /**
     * Возраст.
     * Age.
     *
     * @var int
     */
    public $age;

    /**
     * Количество детей данного возраста.
     * Number of children of age.
     *
     * @var int
     */
    public $count;

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param int $age
     *
     * @return Child
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     *
     * @return Child
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }
}
