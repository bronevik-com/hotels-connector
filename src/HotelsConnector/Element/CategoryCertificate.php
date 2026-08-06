<?php

namespace Bronevik\HotelsConnector\Element;

class CategoryCertificate
{
    /**
     * Номер сертификата.
     * Certificate Number.
     *
     * @var string
     */
    public $number;

    /**
     * Срок действия сертификата.
     * Validity of the certificate.
     *
     * @var string
     */
    public $endDate;

    /**
     * Ссылка на объект в реестре
     * Link to the object in the register
     * @var string|null
     */
    public $linkObjectInRegistry;

    /**
     * Статус объекта в реестре
     * Status of the object in the register
     * @var string|null
     */
    public $objectStatusInRegistry;

    /**
     * Тип объекта в реестре
     * Object type in the register
     * @var string|null
     */
    public $objectTypeInRegistry;

    /**
     * Название объекта в реестре
     * Name of the object in the register
     * @var string|null
     */
    public $nameOfObjectInRegistry;

    /**
     * Идентификатор объекта в реестре
     * Object identifier in the registry
     * @var string|null
     */
    public $registryId;

    /**
     * @param  string  $number
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
     * @param  string  $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @return string|null
     */
    public function getLinkObjectInRegistry()
    {
        return $this->linkObjectInRegistry;
    }

    /**
     * @param string|null $linkObjectInRegistry
     */
    public function setLinkObjectInRegistry($linkObjectInRegistry)
    {
        $this->linkObjectInRegistry = $linkObjectInRegistry;
    }

    /**
     * @return string|null
     */
    public function getObjectStatusInRegistry()
    {
        return $this->objectStatusInRegistry;
    }

    /**
     * @param string|null $objectStatusInRegistry
     */
    public function setObjectStatusInRegistry($objectStatusInRegistry)
    {
        $this->objectStatusInRegistry = $objectStatusInRegistry;
    }

    /**
     * @return string|null
     */
    public function getObjectTypeInRegistry()
    {
        return $this->objectTypeInRegistry;
    }

    /**
     * @param string|null $objectTypeInRegistry
     */
    public function setObjectTypeInRegistry($objectTypeInRegistry)
    {
        $this->objectTypeInRegistry = $objectTypeInRegistry;
    }

    /**
     * @return string|null
     */
    public function getNameOfObjectInRegistry()
    {
        return $this->nameOfObjectInRegistry;
    }

    /**
     * @param string|null $nameOfObjectInRegistry
     */
    public function setNameOfObjectInRegistry($nameOfObjectInRegistry)
    {
        $this->nameOfObjectInRegistry = $nameOfObjectInRegistry;
    }

    /**
     * @return string|null
     */
    public function getRegistryId()
    {
        return $this->registryId;
    }

    /**
     * @param string|null $registryId
     */
    public function setRegistryId($registryId)
    {
        $this->registryId = $registryId;
    }
}
