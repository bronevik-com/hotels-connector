<?php


namespace Bronevik\HotelsConnector\Element;

class RecordIds
{
    /**
     * @var int[]
     */
    public $id = [];

    /**
     * @return int[]
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function addId($id)
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
}
