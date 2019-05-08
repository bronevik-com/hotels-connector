<?php

namespace Bronevik\HotelsConnector\Element;

class Contract
{
    /**
     * Идентификатор договора
     * The contract id
     *
     * @var int
     */
    public $id;

    /**
     * Номер договора
     * The contract reference number
     *
     * @var string
     */
    public $number;

    /**
     * Дата начала действия договора
     * The contract start date
     *
     * @var string
     */
    public $beginsAt;

    /**
     * Юридическое лицо
     * Legal entity
     *
     * @var string
     */
    public $legalEntity;

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
     * @param string $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $beginsAt
     */
    public function setBeginsAt($beginsAt)
    {
        $this->beginsAt = $beginsAt;
    }

    /**
     * @return string
     */
    public function getBeginsAt()
    {
        return $this->beginsAt;
    }

    /**
     * @param string $legalEntity
     */
    public function setLegalEntity($legalEntity)
    {
        $this->legalEntity = $legalEntity;
    }

    /**
     * @return string
     */
    public function getLegalEntity()
    {
        return $this->legalEntity;
    }
}
