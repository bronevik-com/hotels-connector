<?php

namespace Bronevik\HotelsConnector\Enum;

abstract class SkipElementTypes extends Enum
{
    // ежедневные цены
    const DAILY_PRICES = 'dailyPrices';

    // описание отеля
    const DESCRIPTION_DETAILS = 'descriptionDetails';

    // детализация питания
    const MEAL_PRICES = 'mealPriceDetails';

    // детализация штрафа
    const PENALTY_PRICE_DETAILS = 'penaltyPriceDetails';

    /**
     * Элементы, которые можно скипнуть в операци GetHotelOffer
     * @var string[]
     */
    public static $availableSkipElementsForGetHotelOffer = [
        self::DAILY_PRICES,
        self::MEAL_PRICES,
        self::PENALTY_PRICE_DETAILS,
    ];

    /**
     * Элементы, которые можно скипнуть в операци SearchHotelOffers
     * @var string[]
     */
    public static $availableSkipElementsForSearchHotelOffers = [
        self::DAILY_PRICES,
        self::DESCRIPTION_DETAILS,
        self::MEAL_PRICES,
        self::PENALTY_PRICE_DETAILS,
    ];
}
