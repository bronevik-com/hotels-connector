<?php

namespace Bronevik\HotelsConnector\Element;

class CityIds
{
    /**
     * Идентификатор города.
     * The city id.
     *
     * @var int[]
     */
    public $id = [];


    /**
     * @param int $id
     */
    public function add($id)
    {
        $this->id[] = $id;
    }

    /**
     * @return bool
     */
    public function hasId()
    {
        return count($this->id) > 0;
    }

    /**
     * @return int[]
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int[] $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}
