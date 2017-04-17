<?php
namespace Bronevik\HotelsConnector\Element;

class ClientPriceDetails
{
    /**
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $vatIncluded = null;

    /**
     * Type: tns:DetailedPrice
     * 
     * @var \Bronevik\HotelsConnector\Element\DetailedPrice
     */
    public $commission = null;

    /**
     * Type: tns:DetailedPrice
     * 
     * @var \Bronevik\HotelsConnector\Element\DetailedPrice
     */
    public $gross = null;

    /**
     * Type: tns:DetailedPrice
     * 
     * @var \Bronevik\HotelsConnector\Element\DetailedPrice
     */
    public $net = null;

    /**
     * 
     */
    public function __construct()
    {
        $this->commission = new \Bronevik\HotelsConnector\Element\DetailedPrice;
        $this->gross = new \Bronevik\HotelsConnector\Element\DetailedPrice;
        $this->net = new \Bronevik\HotelsConnector\Element\DetailedPrice;
    }

    /**
     * 
     * @param boolean $vatIncluded 
     */
    public function setVatIncluded($vatIncluded)
    {
        $this->vatIncluded = $vatIncluded;
    }

    /**
     * 
     * @return boolean
     */
    public function getVatIncluded()
    {
        return $this->vatIncluded;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\DetailedPrice $commission 
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\DetailedPrice
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\DetailedPrice $gross 
     */
    public function setGross($gross)
    {
        $this->gross = $gross;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\DetailedPrice
     */
    public function getGross()
    {
        return $this->gross;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\DetailedPrice $net 
     */
    public function setNet($net)
    {
        $this->net = $net;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\DetailedPrice
     */
    public function getNet()
    {
        return $this->net;
    }
}

