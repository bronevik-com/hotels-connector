<?php

namespace Bronevik\HotelsConnector\Element;

class SearchAvailabilityHotelOffer extends BaseOffer
{
    /**
     * Фотография отеля.
     * Hotel photo.
     *
     * @var Image | null
     */
    public $photo;

    /**
     * Доступные в отеле доп. услуги.
     * Available amenities in the property.
     *
     * @var AvailableAmenities | null
     */
    public $amenities;

    /**
     * @param Image | null $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return Image | null
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param AvailableAmenities | null $amenities
     */
    public function setAmenities($amenities)
    {
        $this->amenities = $amenities;
    }

    /**
     * @return AvailableAmenities | null
     */
    public function getAmenities()
    {
        return $this->amenities;
    }
}
