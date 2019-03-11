<?php

namespace Bronevik\HotelsConnector\Element;

class GetServiceMessagesResponse extends BaseResponse
{
    /**
     * Найденные комментарии.
     * Founded comments.
     *
     * @var Messages
     */
    public $messages;

    public function __construct()
    {
        $this->messages = new Messages();
    }

    /**
     * @return Messages
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @param Messages $messages
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;
    }
}
