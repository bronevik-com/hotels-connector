<?php

namespace Bronevik\HotelsConnector\Element;

class GetServiceMessagesRequest extends BaseRequest
{
    /**
     * Идентификатор услуги, по которой будет поиск комментариев.
     * The identifier of the service that will be searched for comments.
     *
     * @var int
     */
    public $serviceId;

    /**
     * Идентификаторы комментариев, по которым будет поиск комментариев.
     * Comment identifiers for which comments will be searched.
     *
     * @var ServiceMessages
     */
    public $serviceMessages;

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
     * @param ServiceMessages $serviceMessages
     */
    public function setServiceMessages($serviceMessages)
    {
        $this->serviceMessages = $serviceMessages;
    }

    /**
     * @return ServiceMessages
     */
    public function getServiceMessages()
    {
        return $this->serviceMessages;
    }
}
