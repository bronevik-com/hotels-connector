<?php

namespace Bronevik\HotelsConnector\Element;

class DescriptionDetails
{
    /**
     * Идентификатор страны
     * The country id
     *
     * @var int
     */
    public $countryId;

    /**
     * Название страны
     * The country name
     *
     * @var string
     */
    public $countryName;

    /**
     * Расстояние до центра города (км)
     * The distance to center from hotel (in km)
     *
     * @var float | null
     */
    public $distanceToCenter;

    /**
     * Широта (географические координаты)
     * The latitude (geographic coordinate)
     *
     * @var string
     */
    public $latitude;

    /**
     * Долгота (географические координаты)
     * The longitude (geographic coordinate)
     *
     * @var string
     */
    public $longitude;

    /**
     * Индекс отеля.
     * The hotel zip code.
     *
     * @var string | null
     */
    public $zipCode;

    /**
     * Текстовое описание отеля
     * The text hotel description
     *
     * @var string
     */
    public $description;

    /**
     * Фотографии отеля
     * The hotel's photos
     *
     * @var Photos | null
     */
    public $photos;

    /**
     * Доступные в отеле доп. услуги
     * Available amenities in the property
     *
     * @var AvailableAmenities
     */
    public $availableAmenities;

    public function __construct()
    {
        $this->availableAmenities = new AvailableAmenities();
        $this->photos             = new Photos();
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
     * @param float | null $distanceToCenter
     */
    public function setDistanceToCenter($distanceToCenter)
    {
        $this->distanceToCenter = $distanceToCenter;
    }

    /**
     * @return float | null
     */
    public function getDistanceToCenter()
    {
        return $this->distanceToCenter;
    }

    /**
     * @param string $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param string $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param string | null $zipCode
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @return string | null
     */
    public function getZipCode()
    {
        return $this->zipCode;
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
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param AvailableAmenities $availableAmenities
     */
    public function setAvailableAmenities($availableAmenities)
    {
        $this->availableAmenities = $availableAmenities;
    }

    /**
     * @return AvailableAmenities
     */
    public function getAvailableAmenities()
    {
        return $this->availableAmenities;
    }

    /**
     * @return Photos | null
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @param Photos | null $photos
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;
    }
}
