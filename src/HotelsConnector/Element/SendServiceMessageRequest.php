<?php

namespace Bronevik\HotelsConnector\Element;

class SendServiceMessageRequest extends BaseRequest
{
    /**
     * Идентификатор услуги, к которой будет написан комментарий.
     * Service identifier to which the comment will be written.
     *
     * @var int
     */
    public $serviceId;

    /**
     * Текст комментария.
     * Comment text.
     *
     * @var string
     */
    public $text;

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
