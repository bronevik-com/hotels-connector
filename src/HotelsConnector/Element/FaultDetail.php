<?php

namespace Bronevik\HotelsConnector\Element;

class FaultDetail
{
    /**
     * @var string
     */
    public $traceId;

    /**
     * @return string
     */
    public function getTraceId()
    {
        return $this->traceId;
    }

    /**
     * @param string $traceId
     */
    public function setTraceId($traceId)
    {
        $this->traceId = $traceId;
    }
}
