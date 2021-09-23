<?php

namespace Bronevik\HotelsConnector\Element;

class InformationForGuest
{
    /**
     * Уведомления для гостя.
     * Guest notifications.
     *
     * @var GuestNotification[]
     */
    public $notification = [];

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
