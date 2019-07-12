<?php

namespace Bronevik\HotelsConnector\Element;

class ServiceIdsForCancellation
{
    /**
     * Массив идентификаторов услуг, которые необходимо аннулировать.
     * Array of identifiers of the services to be canceled.
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
