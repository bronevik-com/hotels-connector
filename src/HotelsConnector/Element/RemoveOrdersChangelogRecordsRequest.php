<?php

namespace Bronevik\HotelsConnector\Element;

class RemoveOrdersChangelogRecordsRequest extends BaseRequest
{
    /**
     * @var int[]
     */
    public $recordId = [];

    /**
     * @return bool
     */
    public function hasRecordId()
    {
        return count($this->recordId) > 0;
    }

    /**
     * @return int[]
     */
    public function getRecordId()
    {
        return $this->recordId;
    }

    /**
     * @param int $recordId
     */
    public function addRecordId($recordId)
    {
        $this->recordId[] = $recordId;
    }
}
