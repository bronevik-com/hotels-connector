<?php
namespace Bronevik\HotelsConnector\Element;

/**
 * Номер отеля
 * 
 */
class HotelRoom
{
    /**
     * Type: xsd:int
     * 
     * @var int
     */
    public $id = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $name = null;

    /**
     * Доступные в номере удобства
     * Type: tns:AvailableAmenity
     * 
     * @var \Bronevik\HotelsConnector\Element\AvailableAmenity[]
     */
    public $availableAmenities = [];

    /**
     * Описание номера
     * Type: xsd:string
     * 
     * @var string
     */
    public $description = null;

    /**
     * Фотографии номера
     * Type: tns:Image
     * 
     * @var \Bronevik\HotelsConnector\Element\Image[]
     */
    public $photos = [];

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
}

