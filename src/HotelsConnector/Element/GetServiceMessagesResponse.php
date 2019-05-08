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
     * @param Messages $messages
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;
    }

    /**
     * @return Messages
     */
    public function getMessages()
    {
        return $this->messages;
    }
}
