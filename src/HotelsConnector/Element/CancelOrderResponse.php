<?php

namespace Bronevik\HotelsConnector\Element;

class CancelOrderResponse extends BaseResponse
{
    /**
     * @var boolean
     */
    public $result;

    /**
     * @return boolean
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param boolean $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }
}
