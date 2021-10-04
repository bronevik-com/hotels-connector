<?php

namespace Bronevik\HotelsConnector\Element;

class Invoices
{
    /**
     * @var Invoice[]
     */
    public $invoice;

    /**
     * @return Invoice[]
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * @param Invoice[] $invoice
     */
    public function setInvoice($invoice)
    {
        $this->invoice = $invoice;
    }
}
