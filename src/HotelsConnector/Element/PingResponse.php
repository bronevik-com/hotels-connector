<?php
namespace Bronevik\HotelsConnector\Element;

class PingResponse extends BaseResponse
{
    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $data = null;

    /**
     * 
     * @param string $data 
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * 
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }
}

