<?php
namespace Bronevik\HotelsConnector\Element;

class Country
{
    /**
     * Идентификатор страны
     * The country id
     * Type: xsd:int
     * 
     * @var int
     */
    public $id = null;

    /**
     * Название страны
     * The country name
     * Type: xsd:string
     * 
     * @var string
     */
    public $name = null;

    /**
     * Код страны (трекхбуквенный)
     * The country code (three-letter)
     * Type: xsd:string
     * 
     * @var string
     */
    public $code = null;

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

    /**
     * 
     * @param string $code 
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * 
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
}

