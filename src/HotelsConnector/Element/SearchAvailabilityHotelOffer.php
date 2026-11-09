<?php

namespace Bronevik\HotelsConnector\Element;

class SearchAvailabilityHotelOffer extends BaseOffer
{
    /**
     * Дополнительные начисления.
     *
     * @var Charges|null
     */
    public $charges;

    /**
     * Информация для гостя о предложении.
     *
     * @var string|null
     */
    public $offerInformationForGuest;

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
    /**
     * @return Charges|null
     */
    public function getCharges()
    {
        return $this->charges;
    }

    /**
     * @param Charges|null $charges
     */
    public function setCharges($charges)
    {
        $this->charges = $charges;
    }

    /**
     * @return string|null
     */
    public function getOfferInformationForGuest()
    {
        return $this->offerInformationForGuest;
    }

    /**
     * @param string|null $offerInformationForGuest
     */
    public function setOfferInformationForGuest($offerInformationForGuest)
    {
        $this->offerInformationForGuest = $offerInformationForGuest;
    }

}
