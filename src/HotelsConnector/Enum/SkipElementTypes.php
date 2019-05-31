<?php

namespace Bronevik\HotelsConnector\Enum;

abstract class SkipElementTypes
{
    // ежедневные цены
    const DAILY_PRICES = 'dailyPrices';

    // описание отеля
    const DESCRIPTION_DETAILS = 'descriptionDetails';

    /**
     * Элементы, которые можно скипнуть в операци GetHotelOffer
     * @var string[]
     */
    public static $availableSkipElementsForGetHotelOffer = [
        self::DAILY_PRICES,
    ];

    /**
     * Элементы, которые можно скипнуть в операци SearchHotelOffers
     * @var string[]
     */
    public static $availableSkipElementsForSearchHotelOffers = [
        self::DAILY_PRICES,
        self::DESCRIPTION_DETAILS,
    ];
}