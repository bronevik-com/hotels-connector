<?php

namespace Bronevik\HotelsConnector\Element;

class Order
{
    /**
     * Идентификатор заказа
     * The order id
     *
     * @var int
     */
    public $id;

    /**
     * Контактный телефон по вопросам заказа
     * The contact phone, we use this number in emergency cases
     *
     * @var string
     */
    public $contactPhone;

    /**
     * Контактное лицо по вопросам заказа
     * A person who provides a link for information about order
     *
     * @var string
     */
    public $contactPerson;

    /**
     * Контактный e-mail для подтверждения бронирования
     * The contact email, we use this address to send confirmations
     *
     * @var string
     */
    public $contactEmail;

    /**
     * Комментарии к заказу
     * The comment to the order
     *
     * @var string
     */
    public $comment;

    /**
     * Список возможных услуг
     * List of the services
     *
     * @var OrderService[]
     */
    public $services = [];

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
     * @param string $contactPhone
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;
    }

    /**
     * @return string
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * @param string $contactPerson
     */
    public function setContactPerson($contactPerson)
    {
        $this->contactPerson = $contactPerson;
    }

    /**
     * @return string
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * @param string $contactEmail
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
    }

    /**
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return bool
     */
    public function hasServices()
    {
        return count($this->services) > 0;
    }

    /**
     * @return OrderService[]
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @param OrderService $services
     */
    public function addServices($services)
    {
        $this->services[] = $services;
    }
}
