<?php

namespace Bronevik\HotelsConnector\Element;

use Bronevik\HotelsConnector\Enum\ExceptionCodes;

class FaultDetail
{
    /**
     * @var string
     */
    public $traceId;

    /**
     * @see ExceptionCodes
     * @var int
     */
    public $code;

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

    /**
     * @param int $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }
}
