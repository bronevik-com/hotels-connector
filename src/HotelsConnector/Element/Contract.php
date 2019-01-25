<?php
namespace Bronevik\HotelsConnector\Element;

class Contract
{
    /**
     * Идентификатор договора
     * The contract id
     * Type: xsd:int
     * 
     * @var int
     */
    public $id = null;

    /**
     * Номер договора
     * The contract reference number
     * Type: xsd:string
     * 
     * @var string
     */
    public $number = null;

    /**
     * Дата начала действия договора
     * The contract start date
     * Type: xsd:date
     * 
     * @var date
     */
    public $beginsAt = null;

    /**
     * Юридическое лицо
     * Legal entity
     * Type: xsd:string
     * 
     * @var string
     */
    public $legalEntity = null;

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

    /**
     * 
     * @param string $legalEntity 
     */
    public function setLegalEntity($legalEntity)
    {
        $this->legalEntity = $legalEntity;
    }

    /**
     * 
     * @return string
     */
    public function getLegalEntity()
    {
        return $this->legalEntity;
    }
}

