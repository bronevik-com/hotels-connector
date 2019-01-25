<?php
namespace Bronevik\HotelsConnector\Element;

abstract class Service
{
    /**
     * Номер услуги в системе клиента
     * The service number in the client’s system
     * Type: xsd:string
     * 
     * @var string
     */
    public $referenceId = null;

    /**
     * Список доп. полей для создания услуг
     * The list of extra fields for the services
     * Type: tns:ServiceExtraField
     * 
     * @var \Bronevik\HotelsConnector\Element\ServiceExtraField[]
     */
    public $extraField = [];

    /**
     * 
     * @param string $referenceId 
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;
    }

    /**
     * 
     * @return string
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * 
     * @return bool
     */
    public function hasExtraField()
    {
        return count($this->extraField) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\ServiceExtraField[]
     */
    public function getExtraField()
    {
        return $this->extraField;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\ServiceExtraField $extraField 
     */
    public function addExtraField($extraField)
    {
        $this->extraField[] = $extraField;
    }
}

