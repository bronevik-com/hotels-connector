<?php

namespace Bronevik\HotelsConnector\Element;

class Messages
{
    /**
     * Массив найденных комментариев.
     * Array of founded comments.
     *
     * @var Message[]
     */
    public $message = [];

    /**
     * @return bool
     */
    public function hasMessage()
    {
        return count($this->message) > 0;
    }

    /**
     * @return Message[]
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param Message $message
     */
    public function addMessage($message)
    {
        $this->message[] = $message;
    }
}
