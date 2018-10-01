<?php
namespace Bronevik\HotelsConnector\Element;

abstract class OrderService
{
    /**
     * Type: xsd:int
     * 
     * @var int
     */
    public $id = null;

    /**
     * Type: xsd:dateTime
     * 
     * @var string
     */
    public $date = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $referenceId = null;

    /**
     * Type: xsd:float
     * @deprecated
     * @var float
     */
    public $price = null;

    /**
     * Type: xsd:float
     * @deprecated
     * @var float
     */
    public $commission = null;

    /**
     * Type: xsd:string
     *
     * @var string
     */
    public $cityId = null;

    /**
     * Type: xsd:string
     *
     * @var string
     */
    public $cityName = null;

    /**
     * Type: xsd:string
     *
     * @var string
     */
    public $countryId = null;

    /**
     * Type: xsd:string
     *
     * @var string
     */
    public $countryName = null;

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
     * Type: xsd:int
     * 
     * @var int
     */
    public $statusId = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $statusName = null;

    /**
     * 
     */
    public function __construct()
    {
        $this->priceDetails = new \Bronevik\HotelsConnector\Element\PriceDetails;
    }

    /**
     * 
     * @param int $id 
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * 
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 
     * @param string $date 
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * 
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * 
     * @param string $referenceId 
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;
    }

    /**
     * 
     * @return string
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * 
     * @param float $price 
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * 
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * 
     * @param float $commission 
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;
    }

    /**
     * 
     * @return float
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     *
     * @param string $cityId
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
    }

    /**
     *
     * @return string
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     *
     * @param string $cityName
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
    }

    /**
     *
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     *
     * @param string $countryId
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
    }

    /**
     *
     * @return string
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     *
     * @param string $countryName
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
    }

    /**
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
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

    /**
     * 
     * @param int $statusId 
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;
    }

    /**
     * 
     * @return int
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

    /**
     * 
     * @param string $statusName 
     */
    public function setStatusName($statusName)
    {
        $this->statusName = $statusName;
    }

    /**
     * 
     * @return string
     */
    public function getStatusName()
    {
        return $this->statusName;
    }
}

