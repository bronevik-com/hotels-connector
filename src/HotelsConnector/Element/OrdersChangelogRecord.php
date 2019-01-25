<?php
namespace Bronevik\HotelsConnector\Element;

/**
 * Запись об изменении в услуге
 * The record of change in order
 * 
 */
class OrdersChangelogRecord
{
    /**
     * Идентификатор записи об изменении
     * The change record id
     * Type: xsd:int
     * 
     * @var int
     */
    public $id = null;

    /**
     * Идентификатор заказа
     * The order id
     * Type: xsd:int
     * 
     * @var int
     */
    public $orderId = null;

    /**
     * Идентификатор услуги
     * The service id
     * Type: xsd:int
     * 
     * @var int
     */
    public $serviceId = null;

    /**
     * Номер услуги в системе клиента
     * The service number in the client system
     * Type: xsd:string
     * 
     * @var string
     */
    public $referenceId = null;

    /**
     * Источник создания услуги
     * The source of booking creation
     * Type: xsd:string
     * 
     * @var string
     */
    public $serviceCreationSource = null;

    /**
     * Дата и время изменения
     * Date and time of the change
     * Type: xsd:dateTime
     * 
     * @var string
     */
    public $createdAt = null;

    /**
     * Список изменений
     * The list of changes
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

