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
}

