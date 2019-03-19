<?php

namespace Bronevik\HotelsConnector\Element;

class RemoveOrdersChangelogRecordsResponse extends BaseResponse
{
    /**
     * @var string
     */
    public $status;

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}
