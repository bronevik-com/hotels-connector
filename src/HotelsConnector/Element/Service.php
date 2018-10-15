<?php
namespace Bronevik\HotelsConnector\Element;

abstract class Service
{
    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $referenceId = null;

    /**
     * Type: tns:ServiceExtraField
     *
     * @var ServiceExtraField[]
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
     * @return ServiceExtraField[]
     */
    public function getExtraField()
    {
        return $this->extraField;
    }

    /**
     *
     * @param ServiceExtraField $extraField
     */
    public function addExtraField($extraField)
    {
        $this->extraField[] = $extraField;
    }
}

