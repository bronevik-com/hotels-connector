<?php
namespace Bronevik\HotelsConnector\Element;

class Meal
{
    /**
     * Идентификатор услуги питания
     * The meal service id
     * Type: xsd:int
     * 
     * @var int
     */
    public $id = null;

    /**
     * Наименование услуги питания
     * The meal service name
     * Type: xsd:string
     * 
     * @var string
     */
    public $name = null;

    /**
     * 
     * @param int $id 
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * 
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 
     * @param string $name 
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}

