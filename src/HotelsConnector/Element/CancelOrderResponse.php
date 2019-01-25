<?php
namespace Bronevik\HotelsConnector\Element;

class CancelOrderResponse extends BaseResponse
{
    /**
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $result = null;

    /**
     * 
     * @param boolean $result 
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * 
     * @return boolean
     */
    public function getResult()
    {
        return $this->result;
    }
}

