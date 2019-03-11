<?php
namespace Bronevik\HotelsConnector\Element;

class SearchOfferCriterionPaymentRecipient extends SearchOfferCriterion
{
    /**
     * Критерий поиска отелей по месту оплаты
     * Hotel search criteria by payment way
     *
     * @var string[]
     */
    public $paymentRecipient = [];

    /**
     * @return bool
     */
    public function hasPaymentRecipient()
    {
        return count($this->paymentRecipient) > 0;
    }

    /**
     * @return string[]
     */
    public function getPaymentRecipient()
    {
        return $this->paymentRecipient;
    }

    /**
     * @param string $paymentRecipient
     */
    public function addPaymentRecipient($paymentRecipient)
    {
        $this->paymentRecipient[] = $paymentRecipient;
    }
}
