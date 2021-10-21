<?php


namespace Bronevik\HotelsConnector\Element;

class OrderInvoices
{
    /**
     * Идентификатор заказа
     * Order ID
     *
     * @var int
     */
    public $id;

    /**
     * Счета заказа
     * Order invoices
     *
     * @var Invoices
     */
    public $invoices;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return Invoices
     */
    public function getInvoices()
    {
        return $this->invoices;
    }

    /**
     * @param Invoices $invoices
     */
    public function setInvoices($invoices)
    {
        $this->invoices = $invoices;
    }
}
