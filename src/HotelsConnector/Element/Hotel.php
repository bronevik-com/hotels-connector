<?php

namespace Bronevik\HotelsConnector\Element;

class Hotel
{
    /**
     * Идентификатор отеля
     * The hotel id
     *
     * @var int
     */
    public $id;

    /**
     * Идентификатор города
     * The city id
     *
     * @var int
     */
    public $cityId;

    /**
     * The city name
     *
     * @var string
     */
    public $cityName;

    /**
     * Название отеля
     * The hotel name
     *
     * @var string
     */
    public $name;

    /**
     * Адрес отеля
     * The hotel address
     *
     * @var string
     */
    public $address;

    /**
     * Время заезда
     * The check-in time
     *
     * @var string
     */
    public $checkinTime;

    /**
     * Время выезда
     * The check-out time
     *
     * @var string
     */
    public $checkoutTime;

    /**
     * Описание отеля
     * The hotel description
     *
     * @var DescriptionDetails | null
     */
    public $descriptionDetails;

    /**
     * Применим ли к отелю НДС
     * Returns `true` for properties located in Russian Federation and `false` for foreign properties
     *
     * @var boolean
     */
    public $vatApplicable;

    /**
     * Наличие в отеле дополнительных сборов
     * Specifies whether the hotel has additional taxes
     *
     * @var boolean
     */
    public $hasTaxes;

    /**
     * Категория отеля (от 0 до 5, если 0 - категория не указана)
     * The property star rating (0-5 stars)
     *
     * @var int
     */
    public $category;

    /**
     * Тип отеля
     * The type of the hotel
     *
     * @var string
     */
    public $type;

    /**
     * Важная информация для гостей
     * An important information for guest about hotel accommodation
     *
     * @var InformationForGuest
     */
    public $informationForGuest;

    /**
     * Дополнительная информация
     * Additional info
     *
     * @var AdditionalInfo | null
     */
    public $additionalInfo;

    /**
     * Допустимое время заезда.
     * Allowable arrival time.
     *
     * @var TimeRange | null
     */
    public $allowableCheckinTime;

    /**
     * Допустимое время выезда.
     * Allowable departure time.
     *
     * @var TimeRange | null
     */
    public $allowableCheckoutTime;

    /**
     * Условия оплаты.
     * Payment terms.
     *
     * @var string
     */
    public $paymentTerms;

    /**
     * @var bool
     */
    public $isHotelOnline;

    public function __construct()
    {
        $this->descriptionDetails  = new DescriptionDetails();
        $this->informationForGuest = new InformationForGuest();
        $this->additionalInfo      = new AdditionalInfo();
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
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $checkinTime
     */
    public function setCheckinTime($checkinTime)
    {
        $this->checkinTime = $checkinTime;
    }

    /**
     * @return string
     */
    public function getCheckinTime()
    {
        return $this->checkinTime;
    }

    /**
     * @param string $checkoutTime
     */
    public function setCheckoutTime($checkoutTime)
    {
        $this->checkoutTime = $checkoutTime;
    }

    /**
     * @return string
     */
    public function getCheckoutTime()
    {
        return $this->checkoutTime;
    }

    /**
     * @param DescriptionDetails | null $descriptionDetails
     */
    public function setDescriptionDetails($descriptionDetails)
    {
        $this->descriptionDetails = $descriptionDetails;
    }

    /**
     * @return DescriptionDetails | null
     */
    public function getDescriptionDetails()
    {
        return $this->descriptionDetails;
    }

    /**
     * @param boolean $vatApplicable
     */
    public function setVatApplicable($vatApplicable)
    {
        $this->vatApplicable = $vatApplicable;
    }

    /**
     * @return boolean
     */
    public function getVatApplicable()
    {
        return $this->vatApplicable;
    }

    /**
     * @param boolean $hasTaxes
     */
    public function setHasTaxes($hasTaxes)
    {
        $this->hasTaxes = $hasTaxes;
    }

    /**
     * @return boolean
     */
    public function getHasTaxes()
    {
        return $this->hasTaxes;
    }

    /**
     * @param int $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param InformationForGuest $informationForGuest
     */
    public function setInformationForGuest($informationForGuest)
    {
        $this->informationForGuest = $informationForGuest;
    }

    /**
     * @return InformationForGuest
     */
    public function getInformationForGuest()
    {
        return $this->informationForGuest;
    }

    /**
     * @param AdditionalInfo $additionalInfo
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;
    }

    /**
     * @return AdditionalInfo
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * @return string
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * @param string $paymentTerms
     */
    public function setPaymentTerms($paymentTerms)
    {
        $this->paymentTerms = $paymentTerms;
    }

    /**
     * @return TimeRange | null
     */
    public function getAllowableCheckinTime()
    {
        return $this->allowableCheckinTime;
    }

    /**
     * @param TimeRange | null $allowableCheckinTime
     */
    public function setAllowableCheckinTime($allowableCheckinTime)
    {
        $this->allowableCheckinTime = $allowableCheckinTime;
    }

    /**
     * @return TimeRange | null
     */
    public function getAllowableCheckoutTime()
    {
        return $this->allowableCheckoutTime;
    }

    /**
     * @param TimeRange | null $allowableCheckoutTime
     */
    public function setAllowableCheckoutTime($allowableCheckoutTime)
    {
        $this->allowableCheckoutTime = $allowableCheckoutTime;
    }

    /**
     * @return bool
     */
    public function isOnline()
    {
        return $this->isHotelOnline;
    }

    /**
     * @param bool $isHotelOnline
     */
    public function setIsOnline($isHotelOnline)
    {
        $this->isHotelOnline = $isHotelOnline;
    }

}
