<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Информация о размещении детей.
 * Information about the placement of children.
 */
class ChildrenAccommodation
{
    /**
     * @var ChildAccommodation[]
     */
    public $child = [];

    /**
     * @return ChildAccommodation[]
     */
    public function getChildren()
    {
        return $this->child;
    }

    /**
     * @param array $child
     *
     * @return ChildrenAccommodation
     */
    public function addChildren($child)
    {
        $this->child = $child;

        return $this;
    }


}
