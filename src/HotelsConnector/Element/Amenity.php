<?php

namespace Bronevik\HotelsConnector\Element;

class Amenity
{
    /**
     * Идентификатор доп. услуги
     * The amenity id
     *
     * @var int
     */
    public $id;

    /**
     * Название доп. услуги
     * The amenity name
     *
     * @var string
     */
    public $name;

    /**
     * Название группы услуг
     * The amenity group name
     *
     * @var string
     */
    public $groupName;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

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

    /**
     * @param string $groupName
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
    }

    /**
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }
}
