<?php


namespace Bronevik\HotelsConnector\Element;

class OrdersChangelogRecords
{
    /**
     * @var OrdersChangelogRecord[]
     */
    public $ordersChangelogRecord = [];

    /**
     * @return OrdersChangelogRecord[]
     */
    public function getOrdersChangelogRecord()
    {
        return $this->ordersChangelogRecord;
    }

    /**
     * @param OrdersChangelogRecord[] $ordersChangelogRecord
     */
    public function setOrdersChangelogRecord($ordersChangelogRecord)
    {
        $this->ordersChangelogRecord = $ordersChangelogRecord;
    }

    /**
     * @param OrdersChangelogRecord $ordersChangelogRecord
     */
    public function addOrdersChangelogRecord($ordersChangelogRecord)
    {
        $this->ordersChangelogRecord[] = $ordersChangelogRecord;
    }

    /**
     * @return bool
     */
    public function hasOrdersChangelogRecord()
    {
        return count($this->ordersChangelogRecord) > 0;
    }
}
