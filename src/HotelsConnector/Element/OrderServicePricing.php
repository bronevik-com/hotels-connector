<?php
namespace Bronevik\HotelsConnector\Element;

abstract class OrderServicePricing
{
    /**
     * Type: tns:PriceDetails
     * 
     * @var \Bronevik\HotelsConnector\Element\PriceDetails
     */
    public $priceDetails = null;

    /**
     * Type: tns:CancellationPolicy
     * 
     * @var \Bronevik\HotelsConnector\Element\CancellationPolicy[]
     */
    public $cancellationPolicies = [];

    /**
     * 
     */
    public function __construct()
    {
        $this->priceDetails = new \Bronevik\HotelsConnector\Element\PriceDetails;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\PriceDetails $priceDetails
     */
    public function setPriceDetails($priceDetails)
    {
        $this->priceDetails = $priceDetails;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\PriceDetails
     */
    public function getPriceDetails()
    {
        return $this->priceDetails;
    }

    /**
     * 
     * @return bool
     */
    public function hasCancellationPolicies()
    {
        return count($this->cancellationPolicies) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\CancellationPolicy[]
     */
    public function getCancellationPolicies()
    {
        return $this->cancellationPolicies;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\CancellationPolicy $cancellationPolicies
     */
    public function addCancellationPolicies($cancellationPolicies)
    {
        $this->cancellationPolicies[] = $cancellationPolicies;
    }
}

