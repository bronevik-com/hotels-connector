<?php


namespace Bronevik\HotelsConnector\Element;

class GetOrderInvoicesResponse extends BaseResponse
{
    /**
     * @var OrderInvoice
     */
    public $order;

    /**
     * @return OrderInvoice
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param OrderInvoice $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }
}
