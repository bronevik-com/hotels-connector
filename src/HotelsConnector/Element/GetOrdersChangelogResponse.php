<?php

namespace Bronevik\HotelsConnector\Element;

class GetOrdersChangelogResponse extends BaseResponse
{
    /**
     * @var OrdersChangelogRecords
     */
    public $ordersChangelogRecords;

    /**
     * @return OrdersChangelogRecords
     */
    public function getOrdersChangelogRecords()
    {
        return $this->ordersChangelogRecords;
    }

    /**
     * @param OrdersChangelogRecord $ordersChangelogRecords
     */
    public function setOrdersChangelogRecords($ordersChangelogRecords)
    {
        $this->ordersChangelogRecords = $ordersChangelogRecords;
    }
}
