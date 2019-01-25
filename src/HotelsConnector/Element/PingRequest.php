<?php
namespace Bronevik\HotelsConnector\Element;

class PingRequest extends BaseRequest
{
    /**
     * Передаваемые в запросе данные
     * The data that passed in request and returned in response
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

