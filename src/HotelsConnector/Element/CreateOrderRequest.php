<?php
namespace Bronevik\HotelsConnector\Element;

/**
 * Запрос на создание заказа
 * 
 */
class CreateOrderRequest extends BaseRequest
{
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
    public $contactPhone = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $comment = null;

    /**
     * Type: tns:Service
     * 
     * @var \Bronevik\HotelsConnector\Element\Service[]
     */
    public $services = [];

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
     * @return \Bronevik\HotelsConnector\Element\Service[]
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\Service $services 
     */
    public function addServices($services)
    {
        $this->services[] = $services;
    }
}

