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
    public $name = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $address = null;

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
     * Фотографии отеля
     * Type: tns:Image
     * 
     * @var \Bronevik\HotelsConnector\Element\Image[]
     */
    public $photos = [];

    /**
     * Услуги отеля
     * Type: tns:HotelAmenity
     * 
     * @var \Bronevik\HotelsConnector\Element\HotelAmenity[]
     */
    public $amenities = [];

    /**
     * Категория отеля от 0 до 5. 
     * 0 - категория не указана.
     * Type: xsd:int
     * 
     * @var int
     */
    public $category = null;

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
}

