<?php

namespace Bronevik\HotelsConnector\Element;

class SearchAvailabilityHotelOffer extends BaseOffer
{
    /**
     * Фотография отеля.
     * Hotel photo.
     *
     * @var Image
     */
    public $photo;

    /**
     * Доступные в отеле доп. услуги.
     * Available amenities in the property.
     *
     * @var AvailableAmenities
     */
    public $amenities;

    /**
     * @param Image $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return Image
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param AvailableAmenities $amenities
     */
    public function setAmenities($amenities)
    {
        $this->amenities = $amenities;
    }

    /**
     * @return AvailableAmenities
     */
    public function getAmenities()
    {
        return $this->amenities;
    }
}
