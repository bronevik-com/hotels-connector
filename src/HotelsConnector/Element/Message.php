<?php

namespace Bronevik\HotelsConnector\Element;

class Message
{
    /**
     * Идентификатор комментария.
     * Сomment identifier.
     *
     * @var int
     */
    public $id;

    /**
     * Идентификатор услуги, к которой относится комментарий.
     * The identifier of the service to which the comment relates.
     *
     * @var int
     */
    public $serviceId;

    /**
     * Тип отправителя: менеджер или клиент.
     * Type of sender: manager or client.
     *
     * @var string
     */
    public $senderType;

    /**
     * Дата и время отправки комментария.
     * Date and time of the comment.
     *
     * @var string
     */
    public $date;

    /**
     * Имя отправителя комментария.
     * The name of the sender of the comment.
     *
     * @var string
     */
    public $senderName;

    /**
     * Текст комментария.
     * Comment text.
     *
     * @var string
     */
    public $text;

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
     * @param string $senderType
     */
    public function setSenderType($senderType)
    {
        $this->senderType = $senderType;
    }

    /**
     * @return string
     */
    public function getSenderType()
    {
        return $this->senderType;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $senderName
     */
    public function setSenderName($senderName)
    {
        $this->senderName = $senderName;
    }

    /**
     * @return string
     */
    public function getSenderName()
    {
        return $this->senderName;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}
