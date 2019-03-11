<?php

namespace Bronevik\HotelsConnector\Element;

class ServiceMessages
{
    /**
     * Массив идентификаторов комментариев, по которым будет поиск комментариев.
     * Array of comment identifiers for which comments will be searched.
     *
     * @var int[]
     */
    public $id = [];

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
     * @param int $id
     */
    public function addId($id)
    {
        $this->id[] = $id;
    }
}
