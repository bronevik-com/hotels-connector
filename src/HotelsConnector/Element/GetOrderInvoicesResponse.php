<?php


namespace Bronevik\HotelsConnector\Element;

class GetOrderInvoicesResponse extends BaseResponse
{
    /**
     * @var OrderInvoices
     */
    public $order;

    /**
     * @return OrderInvoices
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param OrderInvoices $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }
}
