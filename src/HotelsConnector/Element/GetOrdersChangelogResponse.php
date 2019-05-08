<?php

namespace Bronevik\HotelsConnector\Element;

class GetOrdersChangelogResponse extends BaseResponse
{
    /**
     * @var OrdersChangelogRecord[]
     */
    public $ordersChangelogRecord = [];

    /**
     * @return bool
     */
    public function hasOrdersChangelogRecord()
    {
        return count($this->ordersChangelogRecord) > 0;
    }

    /**
     * @return OrdersChangelogRecord[]
     */
    public function getOrdersChangelogRecord()
    {
        return $this->ordersChangelogRecord;
    }

    /**
     * @param OrdersChangelogRecord $ordersChangelogRecord
     */
    public function addOrdersChangelogRecord($ordersChangelogRecord)
    {
        $this->ordersChangelogRecord[] = $ordersChangelogRecord;
    }
}
