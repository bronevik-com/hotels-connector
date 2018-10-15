<?php

namespace Bronevik\HotelsConnector\Element;

class RemoveOrdersChangelogRecordsResponse extends BaseResponse
{
    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $status = null;

    /**
     * 
     * @param string $status 
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * 
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}
