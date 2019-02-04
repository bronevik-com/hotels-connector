<?php
namespace Bronevik\HotelsConnector\Element;

class DescriptionDetails
{
    /**
     * Идентификатор страны
     * The country id
     * Type: xsd:int
     * 
     * @var int
     */
    public $countryId = null;

    /**
     * Название страны
     * The country name
     * Type: xsd:string
     * 
     * @var string
     */
    public $countryName = null;

    /**
     * Расстояние до центра города (км)
     * The distance to center from hotel (in km)
     * Type: xsd:float
     * 
     * @var float
     */
    public $distanceToCenter = null;

    /**
     * Широта (географические координаты)
     * The latitude (geographic coordinate)
     * Type: xsd:string
     * 
     * @var string
     */
    public $latitude = null;

    /**
     * Долгота (географические координаты)
     * The longitude (geographic coordinate)
     * Type: xsd:string
     * 
     * @var string
     */
    public $longitude = null;

    /**
     * Текстовое описание отеля
     * The text hotel description
     * Type: xsd:string
     * 
     * @var string
     */
    public $description = null;

    /**
     * Фотографии отеля
     * The hotel's photos
     * Type: tns:Image
     * 
     * @var \Bronevik\HotelsConnector\Element\Image[]
     */
    public $photos = [];

    /**
     * Доступные в отеле доп. услуги
     * Available amenities in the property
     * Type: tns:AvailableAmenities
     * 
     * @var \Bronevik\HotelsConnector\Element\AvailableAmenities
     */
    public $availableAmenities = null;

    /**
     * 
     */
    public function __construct()
    {
        $this->availableAmenities = new \Bronevik\HotelsConnector\Element\AvailableAmenities;
    }

    /**
     * 
     * @param int $countryId 
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
    }

    /**
     * 
     * @return int
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
     * @param float $distanceToCenter 
     */
    public function setDistanceToCenter($distanceToCenter)
    {
        $this->distanceToCenter = $distanceToCenter;
    }

    /**
     * 
     * @return float
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
     * @param \Bronevik\HotelsConnector\Element\AvailableAmenities $availableAmenities 
     */
    public function setAvailableAmenities($availableAmenities)
    {
        $this->availableAmenities = $availableAmenities;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\AvailableAmenities
     */
    public function getAvailableAmenities()
    {
        return $this->availableAmenities;
    }
}

