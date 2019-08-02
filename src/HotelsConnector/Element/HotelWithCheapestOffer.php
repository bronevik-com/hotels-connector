<?php

namespace Bronevik\HotelsConnector\Element;

class HotelWithCheapestOffer
{
    /**
     * Идентификатор отеля.
     * Hotel ID.
     *
     * @var int
     */
    public $id;

    /**
     * Детализация минимальной цены в отеле.
     * Details of the minimum price at the hotel.
     *
     * @var PriceDetails
     */
    public $minimalPriceDetails;

    /**
     * Геоинформация об отеле.
     * Geo information about the hotel.
     *
     * @var HotelGeo
     */
    public $geo;

    /**
     * Информация об отеле.
     * Information about the hotel.
     *
     * @var HotelInfo
     */
    public $info;

    /**
     * Доступные в отеле доп. услуги.
     * Available amenities in the property.
     *
     * @var AvailableAmenities
     */
    public $amenities;

    /**
     * Предложение отеля.
     * Hotel offer.
     *
     * @var SearchAvailabilityHotelOffer
     */
    public $offer;

    /**
     * Информация об НДС в отеле.
     * Information about VAT at the hotel.
     *
     * @var HotelVatInfo
     */
    public $vat;

    public function __construct()
    {
        $this->minimalPriceDetails = new PriceDetails();
        $this->offer               = new SearchAvailabilityHotelOffer();
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
     * @param PriceDetails $minimalPriceDetails
     */
    public function setMinimalPriceDetails($minimalPriceDetails)
    {
        $this->minimalPriceDetails = $minimalPriceDetails;
    }

    /**
     * @return PriceDetails
     */
    public function getMinimalPriceDetails()
    {
        return $this->minimalPriceDetails;
    }

    /**
     * @param HotelGeo $geo
     */
    public function setGeo($geo)
    {
        $this->geo = $geo;
    }

    /**
     * @return HotelGeo
     */
    public function getGeo()
    {
        return $this->geo;
    }

    /**
     * @param HotelInfo $info
     */
    public function setInfo($info)
    {
        $this->info = $info;
    }

    /**
     * @return HotelInfo
     */
    public function getInfo()
    {
        return $this->info;
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

    /**
     * @param SearchAvailabilityHotelOffer $offer
     */
    public function setOffer($offer)
    {
        $this->offer = $offer;
    }

    /**
     * @return SearchAvailabilityHotelOffer
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * @param HotelVatInfo $vat
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
    }

    /**
     * @return HotelVatInfo
     */
    public function getVat()
    {
        return $this->vat;
    }
}

