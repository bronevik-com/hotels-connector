<?php

namespace Bronevik\HotelsConnector\Element;

class GetOrdersChangelogResponse extends BaseResponse
{
    /**
     * @var OrdersChangelogRecords
     */
    public $ordersChangelogRecords;

    public function __construct() {
        $this->ordersChangelogRecords = new OrdersChangelogRecords();
    }

    /**
     * @return OrdersChangelogRecord
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
