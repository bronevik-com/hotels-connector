<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Запись об изменении в услуге
 * The record of change in order
 */
class OrdersChangelogRecord
{
    /**
     * Идентификатор записи об изменении
     * The change record id
     *
     * @var int
     */
    public $id;

    /**
     * Идентификатор заказа
     * The order id
     *
     * @var int
     */
    public $orderId;

    /**
     * Идентификатор услуги
     * The service id
     *
     * @var int
     */
    public $serviceId;

    /**
     * Номер услуги в системе клиента
     * The service number in the client system
     *
     * @var string
     */
    public $referenceId;

    /**
     * Источник создания услуги
     * The source of booking creation
     *
     * @var string
     */
    public $serviceCreationSource;

    /**
     * Дата и время изменения
     * Date and time of the change
     *
     * @var string
     */
    public $createdAt;

    /**
     * Список изменений
     * The list of changes
     *
     * @var ChangeList
     */
    public $changeList;

    public function __construct()
    {
        $this->changeList = new ChangeList();
    }

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
     * @param int $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param int $serviceId
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;
    }

    /**
     * @return int
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * @param string $referenceId
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;
    }

    /**
     * @return string
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * @param string $serviceCreationSource
     */
    public function setServiceCreationSource($serviceCreationSource)
    {
        $this->serviceCreationSource = $serviceCreationSource;
    }

    /**
     * @return string
     */
    public function getServiceCreationSource()
    {
        return $this->serviceCreationSource;
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param ChangeList $changeList
     */
    public function setChangeList($changeList)
    {
        $this->changeList = $changeList;
    }

    /**
     * @return ChangeList
     */
    public function getChangeList()
    {
        return $this->changeList;
    }
}
