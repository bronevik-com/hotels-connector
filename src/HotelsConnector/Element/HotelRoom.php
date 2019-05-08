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
     * @var AvailableAmenity[]
     */
    public $availableAmenities = [];

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
     * @var Image[]
     */
    public $photos = [];

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

    public function __construct()
    {
        $this->bedSets = new BedSets();
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
     * @return bool
     */
    public function hasAvailableAmenities()
    {
        return count($this->availableAmenities) > 0;
    }

    /**
     * @return AvailableAmenity[]
     */
    public function getAvailableAmenities()
    {
        return $this->availableAmenities;
    }

    /**
     * @param AvailableAmenity $availableAmenities
     */
    public function addAvailableAmenities($availableAmenities)
    {
        $this->availableAmenities[] = $availableAmenities;
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
     * @return bool
     */
    public function hasPhotos()
    {
        return count($this->photos) > 0;
    }

    /**
     * @return Image[]
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @param Image $photos
     */
    public function addPhotos($photos)
    {
        $this->photos[] = $photos;
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
     * @return BedSets
     */
    public function getBedSets()
    {
        return $this->bedSets;
    }

    /**
     * @param BedSets $bedSets
     */
    public function setBedSets($bedSets)
    {
        $this->bedSets = $bedSets;
    }
}
