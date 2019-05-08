<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Базовая структура ответа
 * The base structure of response
 */
abstract class BaseResponse
{
    /**
     * @var string
     */
    public $traceId;

    /**
     * @param string $traceId
     */
    public function setTraceId($traceId)
    {
        $this->traceId = $traceId;
    }

    /**
     * @return string
     */
    public function getTraceId()
    {
        return $this->traceId;
    }
}
