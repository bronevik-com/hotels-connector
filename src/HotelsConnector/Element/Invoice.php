<?php


namespace Bronevik\HotelsConnector\Element;

class Invoice
{
    /**
     * Временная ссылка для скачивания счета
     * Temporary link to download the invoice
     *
     * @var string
     */
    public $invoiceLink;

    /**
     * @var InvoiceInfo | null
     */
    public $invoiceInfo;

    /**
     * @return InvoiceInfo | null
     */
    public function getInvoiceInfo()
    {
        return $this->invoiceInfo;
    }

    /**
     * @param InvoiceInfo | null $invoiceInfo
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
