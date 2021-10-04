<?php


namespace Bronevik\HotelsConnector\Element;

class Invoice
{
    /**
     * @var string
     */
    public $invoiceLink;

    /**
     * @var InvoiceInfo
     */
    public $invoiceInfo;

    /**
     * @return InvoiceInfo
     */
    public function getInvoiceInfo()
    {
        return $this->invoiceInfo;
    }

    /**
     * @param InvoiceInfo $invoiceInfo
     */
    public function setInvoiceInfo($invoiceInfo)
    {
        $this->invoiceInfo = $invoiceInfo;
    }

    /**
     * @return string
     */
    public function getInvoiceLink()
    {
        return $this->invoiceLink;
    }

    /**
     * @param string $invoiceLink
     */
    public function setInvoiceLink($invoiceLink)
    {
        $this->invoiceLink = $invoiceLink;
    }
}
