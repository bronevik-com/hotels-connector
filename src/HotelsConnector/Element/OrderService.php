<?php

namespace Bronevik\HotelsConnector\Element;

abstract class OrderService
{
    /**
     * Идентификатор услуги
     * The service id
     *
     * @var int
     */
    public $id;

    /**
     * Дата создания услуги
     * The creating order date
     *
     * @var string
     */
    public $date;

    /**
     * Номер услуги в системе клиента
     * The service number in the client’s system
     *
     * @var string
     */
    public $referenceId;

    /**
     * Идентификатор города, где находится отель
     * The id of the city where the hotel is located
     *
     * @var int
     */
    public $cityId;

    /**
     * Название города
     * The name of the city where the hotel is located
     *
     * @var string
     */
    public $cityName;

    /**
     * Идентификатор страны, где находится отель
     * The id of the country where the hotel is located
     *
     * @var int
     */
    public $countryId;

    /**
     * Название страны
     * The name of the country where the hotel is located
     *
     * @var string
     */
    public $countryName;

    /**
     * Детализация стоимости заказа
     * The detailed order price
     *
     * @var PriceDetails
     */
    public $priceDetails;

    /**
     * Правила отмены брони
     * The policies of booking cancellation
     *
     * @var CancellationPolicy[]
     */
    public $cancellationPolicies = [];

    /**
     * Статус услуги
     * The service status
     *
     * @var int
     */
    public $statusId;

    /**
     * Название статуса услуги
     * The service name
     *
     * @var string
     */
    public $statusName;

    public function __construct()
    {
        $this->priceDetails = new PriceDetails();
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $referenceId
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;
    }

    /**
     * @return string
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * @param int $cityId
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
    }

    /**
     * @return int
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param string $cityName
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
    }

    /**
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @param int $countryId
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * @param string $countryName
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
    }

    /**
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * @param PriceDetails $priceDetails
     */
    public function setPriceDetails($priceDetails)
    {
        $this->priceDetails = $priceDetails;
    }

    /**
     * @return PriceDetails
     */
    public function getPriceDetails()
    {
        return $this->priceDetails;
    }

    /**
     * @return bool
     */
    public function hasCancellationPolicies()
    {
        return count($this->cancellationPolicies) > 0;
    }

    /**
     * @return CancellationPolicy[]
     */
    public function getCancellationPolicies()
    {
        return $this->cancellationPolicies;
    }

    /**
     * @param CancellationPolicy $cancellationPolicies
     */
    public function addCancellationPolicies($cancellationPolicies)
    {
        $this->cancellationPolicies[] = $cancellationPolicies;
    }

    /**
     * @param int $statusId
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;
    }

    /**
     * @return int
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

    /**
     * @param string $statusName
     */
    public function setStatusName($statusName)
    {
        $this->statusName = $statusName;
    }

    /**
     * @return string
     */
    public function getStatusName()
    {
        return $this->statusName;
    }
}
