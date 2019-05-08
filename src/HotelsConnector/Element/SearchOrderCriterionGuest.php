<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Поиск по именам гостей
 * The order search by guest name
 */
class SearchOrderCriterionGuest extends SearchOrderCriterion
{
    /**
     * @var string
     */
    public $name;

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
