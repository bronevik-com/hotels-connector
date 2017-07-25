<?php
namespace Bronevik\HotelsConnector\Element;

class Contract
{
    /**
     * Внутренний идентификатор договора
     * Type: xsd:int
     * 
     * @var int
     */
    public $id = null;

    /**
     * Номер договора
     * Type: xsd:string
     * 
     * @var string
     */
    public $number = null;

    /**
     * Дата начала действия договора
     * Type: xsd:date
     * 
     * @var date
     */
    public $beginsAt = null;

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
     * @param string $number 
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * 
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * 
     * @param date $beginsAt 
     */
    public function setBeginsAt($beginsAt)
    {
        $this->beginsAt = $beginsAt;
    }

    /**
     * 
     * @return date
     */
    public function getBeginsAt()
    {
        return $this->beginsAt;
    }
}

