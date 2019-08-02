<?php

namespace Bronevik\HotelsConnector\Enum;

abstract class AddElementsTypes
{
    // Геоинформация об отеле
    const GEO = 'Geo';

    // Услуги отеля
    const HOTEL_AMENITIES = 'HotelAmenities';

    // Информация об НДС в отеле
    const VAT = 'Vat';

    // region HOTEL_INFO

    // Описание отеля
    const INFO_DESCRIPTION = 'Info_Description';

    // Тип отеля
    const INFO_TYPE = 'Info_Type';

    // Название отеля
    const INFO_NAME = 'Info_Name';

    // Категория отеля
    const INFO_CATEGORY = 'Info_Category';

    // Главная фотография отеля
    const INFO_PHOTO = 'Info_Photo';

    // Ссылка на бронирование для метапоисковиков
    const INFO_DEEPLINK = 'Info_Deeplink';

    // endregion

    // region OFFER_INFO

    // Количество свободных номеров
    const OFFER_FREE_ROOMS = 'Offer_FreeRooms';

    // Услуги питания в номере
    const OFFER_MEALS = 'Offer_Meals';

    // Детализация услуг питания в номере
    const OFFER_MEAL_PRICE_DETAILS = 'Offer_Meal_PriceDetails';

    // Детализация штрафов
    const OFFER_CANCELLATION_POLICIES_PRICE_DETAILS = 'Offer_CancellationPolicies_PriceDetails';

    // Услуги номера
    const OFFER_AMENITIES = 'Offer_Amenities';

    // Главная фотография номера
    const OFFER_ROOM_PHOTO = 'Offer_RoomPhoto';
    // endregion
}
