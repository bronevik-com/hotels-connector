<?php

namespace Bronevik\HotelsConnector\Element;

class RemoveOrdersChangelogRecordsResponse extends BaseResponse
{
    /**
     * @var string
     */
    public $status;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
}
