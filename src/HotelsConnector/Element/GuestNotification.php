<?php

namespace Bronevik\HotelsConnector\Element;

class GuestNotification
{
    /**
     * Тип уведомления.
     * Notification type.
     *
     * @var string
     */
    public $type;

    /**
     * Текст уведомления.
     * Notification text.
     *
     * @var string
     */
    public $value;

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
