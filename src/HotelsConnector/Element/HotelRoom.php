<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Описание номера отеля
 * The hotel room description
 */
class HotelRoom
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * Доступные в номере удобства
     * Available amenities in room
     *
     * @var AvailableAmenities
     */
    public $availableAmenities;

    /**
     * Описание номера
     * The text room description
     *
     * @var string
     */
    public $description;

    /**
     * Фотографии номера
     * Room's photos
     *
     * @var Photos
     */
    public $photos;

    /**
     * Количество гостей, которых можно разместить в номере
     * An amount of guests that can be accommodated in the room
     *
     * @var int
     */
    public $roomCapacity;

    /**
     * Площадь номера
     * Room size
     *
     * @var float
     */
    public $size;

    /**
     * Варианты комбинаций кроватей.
     * Bed combinations options.
     *
     * @var BedSets
     */
    public $bedSets;

    /**
     * Часть здания, в которой находится номер.
     * The part of the building where the room is located.
     *
     * @var string
     */
    public $buildingPart;

    /**
     * Количество комнат в номере.
     * The number of apartment in the room.
     *
     * @var int
     */
    public $bedroomAmount;

    /**
     * Информация о наличии окна в номере.
     * Information about the availability of windows in the room.
     *
     * @var boolean
     */
    public $withWindow;

    /**
     * Информация видах из окна в номере.
     * Information views from the window in the room.
     * Type: tns:WindowViews
     *
     * @var WindowViews
     */
    public $windowViews;

    public function __construct()
    {
        $this->bedSets     = new BedSets();
        $this->windowViews = new WindowViews();
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
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param int $roomCapacity
     */
    public function setRoomCapacity($roomCapacity)
    {
        $this->roomCapacity = $roomCapacity;
    }

    /**
     * @return int
     */
    public function getRoomCapacity()
    {
        return $this->roomCapacity;
    }

    /**
     * @param float $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return float
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param BedSets $bedSets
     */
    public function setBedSets($bedSets)
    {
        $this->bedSets = $bedSets;
    }

    /**
     * @return BedSets
     */
    public function getBedSets()
    {
        return $this->bedSets;
    }

    /**
     * @param string $buildingPart
     */
    public function setBuildingPart($buildingPart)
    {
        $this->buildingPart = $buildingPart;
    }

    /**
     * @return string
     */
    public function getBuildingPart()
    {
        return $this->buildingPart;
    }

    /**
     * @param int $bedroomAmount
     */
    public function setBedroomAmount($bedroomAmount)
    {
        $this->bedroomAmount = $bedroomAmount;
    }

    /**
     * @return int
     */
    public function getBedroomAmount()
    {
        return $this->bedroomAmount;
    }

    /**
     * @param boolean $withWindow
     */
    public function setWithWindow($withWindow)
    {
        $this->withWindow = $withWindow;
    }

    /**
     * @return boolean
     */
    public function getWithWindow()
    {
        return $this->withWindow;
    }

    /**
     * @param WindowViews $windowViews
     */
    public function setWindowViews($windowViews)
    {
        $this->windowViews = $windowViews;
    }

    /**
     * @return WindowViews
     */
    public function getWindowViews()
    {
        return $this->windowViews;
    }

    /**
     * @return Photos
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @param Photos $photos
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;
    }

    /**
     * @return AvailableAmenities
     */
    public function getAvailableAmenities()
    {
        return $this->availableAmenities;
    }

    /**
     * @param AvailableAmenities $availableAmenities
     */
    public function setAvailableAmenities($availableAmenities)
    {
        $this->availableAmenities = $availableAmenities;
    }
}
