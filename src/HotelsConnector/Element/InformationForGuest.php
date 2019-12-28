<?php

namespace Bronevik\HotelsConnector\Element;

class InformationForGuest
{
    /**
     * Важная информация об отеле
     * Important information about hotel
     *
     * @var string
     */
    public $comment;

    /**
     * Уведомления для гостя.
     * Guest notifications.
     *
     * @var GuestNotification[]
     */
    public $notification = [];

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
    public function hasNotification()
    {
        return count($this->notification) > 0;
    }

    /**
     * @return GuestNotification[]
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * @param GuestNotification $notification
     */
    public function addNotification($notification)
    {
        $this->notification[] = $notification;
    }
}
