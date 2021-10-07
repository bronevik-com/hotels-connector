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

    // элемент для работы метапоисковых систем
    const DEEPLINK = 'deepLink';

    /**
     * Элементы, которые можно скипнуть в операци SearchHotelOffers
     * @var string[]
     */
    public static $availableSkipElementsForSearchHotelOffers = [
        self::DAILY_PRICES,
        self::DESCRIPTION_DETAILS,
        self::MEAL_PRICES,
        self::PENALTY_PRICE_DETAILS,
        self::DEEPLINK,
    ];
}
