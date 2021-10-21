<?php

namespace Bronevik\HotelsConnector\Element;

class RemoveOrdersChangelogRecordsRequest extends BaseRequest
{
    /**
     * @var RecordIds
     */
    public $recordIds;

    public function __construct()
    {
        parent::__construct();
        $this->recordIds = new RecordIds();
    }

    /**
     * @return RecordIds
     */
    public function getRecordIds()
    {
        return $this->recordIds;
    }

    /**
     * @param RecordIds $recordIds
     */
    public function setRecordIds($recordIds)
    {
        $this->recordIds = $recordIds;
    }
}
