<?php
namespace Bronevik\HotelsConnector\Element;

class OrdersChangelogRecord
{
    /**
     * Type: xsd:int
     * 
     * @var int
     */
    public $id = null;

    /**
     * Type: xsd:int
     * 
     * @var int
     */
    public $orderId = null;

    /**
     * Type: xsd:int
     * 
     * @var int
     */
    public $serviceId = null;

    /**
     * Type: xsd:string
     *
     * @var string
     */
    public $referenceId = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $serviceCreationSource = null;

    /**
     * Type: xsd:dateTime
     * 
     * @var string
     */
    public $createdAt = null;

    /**
     * Type: tns:ChangeList
     * 
     * @var \Bronevik\HotelsConnector\Element\ChangeList
     */
    public $changeList = null;

    /**
     * 
     */
    public function __construct()
    {
        $this->changeList = new \Bronevik\HotelsConnector\Element\ChangeList;
    }

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
     * @param int $orderId 
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * 
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 
     * @param int $serviceId 
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;
    }

    /**
     * 
     * @return int
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

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
     * @param string $serviceCreationSource 
     */
    public function setServiceCreationSource($serviceCreationSource)
    {
        $this->serviceCreationSource = $serviceCreationSource;
    }

    /**
     * 
     * @return string
     */
    public function getServiceCreationSource()
    {
        return $this->serviceCreationSource;
    }

    /**
     * 
     * @param string $createdAt 
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * 
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     *
     * @param \Bronevik\HotelsConnector\Element\ChangeList $changeList
     */
    public function setChangeList($changeList)
    {
        $this->changeList = $changeList;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\ChangeList
     */
    public function getChangeList()
    {
        return $this->changeList;
    }
}
