<?php
namespace Bronevik\HotelsConnector\Element;

class Hotel
{
    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $id = null;

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
    public $name = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $address = null;

    /**
     * Расстояние до центра города (км)
     * Type: xsd:string
     * 
     * @var string
     */
    public $distanceToCenter = null;

    /**
     * Широта
     * Type: xsd:string
     * 
     * @var string
     */
    public $latitude = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $longitude = null;

    /**
     * Type: xsd:time
     * 
     * @var string
     */
    public $checkinTime = null;

    /**
     * Type: xsd:time
     * 
     * @var string
     */
    public $checkoutTime = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $description = null;

    /**
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $vatApplicable = null;

    /**
     * Фотографии отеля
     * Type: tns:Image
     * 
     * @var \Bronevik\HotelsConnector\Element\Image[]
     */
    public $photos = [];

    /**
     * Доступные в отеле удобства
     * Type: tns:AvailableAmenity
     * 
     * @var \Bronevik\HotelsConnector\Element\AvailableAmenity[]
     */
    public $availableAmenities = [];

    /**
     * Услуги отеля
     * Type: tns:HotelAmenity
     * 
     * @var \Bronevik\HotelsConnector\Element\HotelAmenity[]
     */
    public $amenities = [];

    /**
     * Категория отеля от 0 до 5. 0 - категория
     *                                 не указана.
     * Type: xsd:int
     * 
     * @var int
     */
    public $category = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $type = null;

    /**
     * Важная информация для гостей
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
        $this->informationForGuest = new \Bronevik\HotelsConnector\Element\InformationForGuest;
    }

    /**
     * 
     * @param string $id 
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * 
     * @return string
     */
    public function getId()
    {
        return $this->id;
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
     * @param string $distanceToCenter 
     */
    public function setDistanceToCenter($distanceToCenter)
    {
        $this->distanceToCenter = $distanceToCenter;
    }

    /**
     * 
     * @return string
     */
    public function getDistanceToCenter()
    {
        return $this->distanceToCenter;
    }

    /**
     * 
     * @param string $latitude 
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * 
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * 
     * @param string $longitude 
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * 
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
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
     * @param string $description 
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * 
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
     * @return bool
     */
    public function hasPhotos()
    {
        return count($this->photos) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\Image[]
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\Image $photos 
     */
    public function addPhotos($photos)
    {
        $this->photos[] = $photos;
    }

    /**
     * 
     * @return bool
     */
    public function hasAvailableAmenities()
    {
        return count($this->availableAmenities) > 0;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\AvailableAmenity[]
     */
    public function getAvailableAmenities()
    {
        return $this->availableAmenities;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\AvailableAmenity $availableAmenities 
     */
    public function addAvailableAmenities($availableAmenities)
    {
        $this->availableAmenities[] = $availableAmenities;
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

