<?php
namespace Bronevik\HotelsConnector\Element;

class Hotel
{
    /**
     * Идентификатор отеля
     * The hotel id
     * Type: xsd:int
     * 
     * @var int
     */
    public $id = null;

    /**
     * Идентификатор города
     * The city id
     * Type: xsd:int
     * 
     * @var int
     */
    public $cityId = null;

    /**
     * The city name
     * Type: xsd:string
     * 
     * @var string
     */
    public $cityName = null;

    /**
     * Название отеля
     * The hotel name
     * Type: xsd:string
     * 
     * @var string
     */
    public $name = null;

    /**
     * Адрес отеля
     * The hotel address
     * Type: xsd:string
     * 
     * @var string
     */
    public $address = null;

    /**
     * Время заезда
     * The check-in time
     * Type: xsd:time
     * 
     * @var string
     */
    public $checkinTime = null;

    /**
     * Время выезда
     * The check-out time
     * Type: xsd:time
     * 
     * @var string
     */
    public $checkoutTime = null;

    /**
     * Фиксировано ли время заезда в отеле
     * Whether the check-in time is fixed or not
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $isFixedCheckinTime = null;

    /**
     * Описание отеля
     * The hotel description
     * Type: tns:DescriptionDetails
     * 
     * @var \Bronevik\HotelsConnector\Element\DescriptionDetails
     */
    public $descriptionDetails = null;

    /**
     * Применим ли к отелю НДС
     * Returns `true` for properties located in Russian Federation and `false` for foreign properties
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $vatApplicable = null;

    /**
     * Наличие в отеле дополнительных сборов
     * Specifies whether the hotel has additional taxes
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $hasTaxes = null;

    /**
     * Услуги отеля
     * The hotel amenities
     * Type: tns:HotelAmenity
     * 
     * @var \Bronevik\HotelsConnector\Element\HotelAmenity[]
     */
    public $amenities = [];

    /**
     * Категория отеля (от 0 до 5, если 0 - категория не указана)
     * The property star rating (0-5 stars)
     * Type: xsd:int
     * 
     * @var int
     */
    public $category = null;

    /**
     * Тип отеля
     * The type of the hotel
     * Type: xsd:string
     * 
     * @var string
     */
    public $type = null;

    /**
     * Важная информация для гостей
     * An important information for guest about hotel accommodation
     * Type: tns:InformationForGuest
     * 
     * @var \Bronevik\HotelsConnector\Element\InformationForGuest
     */
    public $informationForGuest = null;

    /**
     * 
     */
    public function __construct()
    {
        $this->descriptionDetails = new \Bronevik\HotelsConnector\Element\DescriptionDetails;
        $this->informationForGuest = new \Bronevik\HotelsConnector\Element\InformationForGuest;
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
     * @param int $cityId 
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
    }

    /**
     * 
     * @return int
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
     * @param string $name 
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 
     * @param string $address 
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * 
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * 
     * @param string $checkinTime 
     */
    public function setCheckinTime($checkinTime)
    {
        $this->checkinTime = $checkinTime;
    }

    /**
     * 
     * @return string
     */
    public function getCheckinTime()
    {
        return $this->checkinTime;
    }

    /**
     * 
     * @param string $checkoutTime 
     */
    public function setCheckoutTime($checkoutTime)
    {
        $this->checkoutTime = $checkoutTime;
    }

    /**
     * 
     * @return string
     */
    public function getCheckoutTime()
    {
        return $this->checkoutTime;
    }

    /**
     * 
     * @param boolean $isFixedCheckinTime 
     */
    public function setIsFixedCheckinTime($isFixedCheckinTime)
    {
        $this->isFixedCheckinTime = $isFixedCheckinTime;
    }

    /**
     * 
     * @return boolean
     */
    public function getIsFixedCheckinTime()
    {
        return $this->isFixedCheckinTime;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\DescriptionDetails $descriptionDetails 
     */
    public function setDescriptionDetails($descriptionDetails)
    {
        $this->descriptionDetails = $descriptionDetails;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\DescriptionDetails
     */
    public function getDescriptionDetails()
    {
        return $this->descriptionDetails;
    }

    /**
     * 
     * @param boolean $vatApplicable 
     */
    public function setVatApplicable($vatApplicable)
    {
        $this->vatApplicable = $vatApplicable;
    }

    /**
     * 
     * @return boolean
     */
    public function getVatApplicable()
    {
        return $this->vatApplicable;
    }

    /**
     * 
     * @param boolean $hasTaxes 
     */
    public function setHasTaxes($hasTaxes)
    {
        $this->hasTaxes = $hasTaxes;
    }

    /**
     * 
     * @return boolean
     */
    public function getHasTaxes()
    {
        return $this->hasTaxes;
    }

    /**
     * 
     * @return bool
     */
    public function hasAmenities()
    {
        return count($this->amenities) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\HotelAmenity[]
     */
    public function getAmenities()
    {
        return $this->amenities;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\HotelAmenity $amenities 
     */
    public function addAmenities($amenities)
    {
        $this->amenities[] = $amenities;
    }

    /**
     * 
     * @param int $category 
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * 
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * 
     * @param string $type 
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * 
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\InformationForGuest $informationForGuest 
     */
    public function setInformationForGuest($informationForGuest)
    {
        $this->informationForGuest = $informationForGuest;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\InformationForGuest
     */
    public function getInformationForGuest()
    {
        return $this->informationForGuest;
    }
}

