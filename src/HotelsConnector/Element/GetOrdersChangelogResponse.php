<?php
namespace Bronevik\HotelsConnector\Element;

class GetOrdersChangelogResponse extends BaseResponse
{
    /**
     * Type: tns:OrdersChangelogRecord
     * 
     * @var \Bronevik\HotelsConnector\Element\OrdersChangelogRecord[]
     */
    public $ordersChangelogRecord = [];

    /**
     * 
     * @return bool
     */
    public function hasOrdersChangelogRecord()
    {
        return count($this->ordersChangelogRecord) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\OrdersChangelogRecord[]
     */
    public function getOrdersChangelogRecord()
    {
        return $this->ordersChangelogRecord;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\OrdersChangelogRecord $ordersChangelogRecord 
     */
    public function addOrdersChangelogRecord($ordersChangelogRecord)
    {
        $this->ordersChangelogRecord[] = $ordersChangelogRecord;
    }
}

