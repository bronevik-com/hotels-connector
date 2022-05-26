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
     * @var AvailableAmenities | null
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
     * @var float | null
     */
    public $size;

    /**
     * Варианты комбинаций кроватей.
     * Bed combinations options.
     *
     * @var BedSets
     */
    public $availableBedSets;

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
     * @var int | null
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
     * @var WindowViews | null
     */
    public $windowViews;

    public function __construct()
    {
        $this->availableBedSets = new BedSets();
        $this->windowViews      = new WindowViews();
        $this->photos      = new Photos();
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
     * @param float | null $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return float | null
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
        $this->availableBedSets = $bedSets;
    }

    /**
     * @return BedSets
     */
    public function getBedSets()
    {
        return $this->availableBedSets;
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
     * @param int | null $bedroomAmount
     */
    public function setBedroomAmount($bedroomAmount)
    {
        $this->bedroomAmount = $bedroomAmount;
    }

    /**
     * @return int | null
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
     * @param WindowViews | null $windowViews
     */
    public function setWindowViews($windowViews)
    {
        $this->windowViews = $windowViews;
    }

    /**
     * @return WindowViews | null
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
     * @return AvailableAmenities | null
     */
    public function getAvailableAmenities()
    {
        return $this->availableAmenities;
    }

    /**
     * @param AvailableAmenities | null $availableAmenities
     */
    public function setAvailableAmenities($availableAmenities)
    {
        $this->availableAmenities = $availableAmenities;
    }
}
