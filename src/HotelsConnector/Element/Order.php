<?php
namespace Bronevik\HotelsConnector\Element;

class Order
{
    /**
     * Type: xsd:int
     * 
     * @var int
     */
    public $id = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $contactPhone = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $contactPerson = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $contactEmail = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $comment = null;

    /**
     * Type: tns:OrderService
     * 
     * @var \Bronevik\HotelsConnector\Element\OrderService[]
     */
    public $services = [];

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
     * @param string $contactPhone 
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;
    }

    /**
     * 
     * @return string
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * 
     * @param string $contactPerson 
     */
    public function setContactPerson($contactPerson)
    {
        $this->contactPerson = $contactPerson;
    }

    /**
     * 
     * @return string
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * 
     * @param string $contactEmail 
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
    }

    /**
     * 
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * 
     * @param string $comment 
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * 
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * 
     * @return bool
     */
    public function hasServices()
    {
        return count($this->services) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\OrderService[]
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\OrderService $services 
     */
    public function addServices($services)
    {
        $this->services[] = $services;
    }
}

