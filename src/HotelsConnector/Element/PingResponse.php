<?php

namespace Bronevik\HotelsConnector\Element;

class PingResponse extends BaseResponse
{
    /**
     * @var string
     */
    public $data;

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param string $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
}
