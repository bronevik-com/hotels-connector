<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Идентификаторы отелей, по которым будет идти поиск.
 * The hotel ids for search.
 */
class HotelIds
{
    /**
     * Идентификатор отеля.
     * Hotel id.
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
