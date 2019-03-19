<?php

namespace Bronevik\HotelsConnector\Element;

class FaultDetail
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
