# Коннектор для SOAP-сервиса hotels-api.bronevik.com

- [Установка](#Установка)
    - [Требования](#Требования)
    - [Через Composer](#Через-composer)
    - [Без Composer](#Без-composer)
- [Подготовка](#Подготовка)
    - [Инициализация коннектора](#Инициализация-коннектора)
    - [Проверка подключения](#Проверка-подключения)
- [Документация по работе с SOAP сервером (без использования этого коннектора)](#Документация-по-работе-с-SOAP-сервером-без-использования-этого-коннектора)
- [Документация по работе с клиентом и примеры](#Документация-по-работе-с-клиентом-и-примеры)
    - [Справочники](#Справочники)
        - [Получение списка стран](#Получение-списка-стран)
        - [Получение списка городов](#Получение-списка-городов)
        - [Получение списка удобств](#Получение-списка-удобств)
        - [Получение списка питания](#Получение-списка-питания)
    - [Поиск предложений отелей](#Поиск-предложений-отелей)
        - [Простой запрос](#Простой-запрос)
        - [Запрос с фильтрацией предложений](#Запрос-с-фильтрацией-предложений)
        - [Запрос предложений конкретных отелей](#Запрос-предложений-конкретных-отелей)
        - [Управление содержимым ответа](#Управление-содержимым-ответа)
        - [Объект отельного предложения](#Отельное-предложение)
    - [Получение информации об отелях](#Получение-информации-об-отелях)
    - [Получение информации о предложении отеля](#Получение-информации-о-предложении-отеля)
    - [Заказ бронирования проживания и операции с заказами](#Заказ-бронирования-проживания-и-операции-с-заказами)
        - [Создание заказа](#Создание-заказа)
        - [Получение информации о заказе](#Получение-информации-о-заказе)
        - [Отмена (аннуляция) заказа](#Отмена-заказа)
        - [Поиск заказов](#Поиск-заказов)
        - [Услуги](#Услуги)
            - [История изменений](#История-изменений)
                - [Получение записей истории изменений](#Получение-записей-истории-изменений)
                - [Удаление записей из истории изменений](#Удаление-записей-из-истории-изменений)
            - [Комментарии](#Комментарии)
                - [Получение комментариев](#Получение-комментариев)
                - [Отправка комментариев](#Отправка-комментариев)
    - [Детализация предложения](#Детализация-предложения)
    - [Ошибки](#Ошибки)

## Установка

### Требования

PHP 5.6+

ext-soap

### Через Composer

Для установки через Composer необходимо выполнить команду:

```composer require bronevik/hotels-connector```

### Без Composer

1. Склонируйте https://github.com/bronevik-com/hotels-connector.git
1. Зарегистрируйте автозагрузчик:

```php
<?php

spl_autoload_register(function ($class) {
    $file = 'ПУТЬ_К_ФАЙЛАМ_КОННЕКТОРА' . '/src/' . strtr($class, ['Bronevik/HotelsConnector/' => '', '\\' => '/']) . '.php';
    if (is_readable($file)) {
        require_once $file;
    }
});
```

## Подготовка

### Инициализация коннектора

```php
<?php

$connector = new Bronevik\HotelsConnector(Bronevik\HotelsConnector\Enum\Endpoints::DEVELOPMENT, true);
$connector->setCredentials('login', 'password', 'privateKey');
$connector->setLanguage(Bronevik\HotelsConnector\Enum\Languages::RUSSIAN);
```

В конструктор коннектора передаётся `endpoint` SOAP-сервера и флаг `debugMode`.

Для `endpoint` возможны два значения:

1. `\Bronevik\HotelsConnector\Enum\Endpoints::DEVELOPMENT` - для разработки, запросы отправляются на тестовый сервер.
1. `\Bronevik\HotelsConnector\Enum\Endpoints::PRODUCTION` - для использования в бою.

Флаг `debugMode`, установленный в `true`, позволяет использовать следующие методы:

1. `$connector->getLastResponse()` для получения содержимого последнего ответа сервера.
1. `$connector->getLastResponceHeaders()` для получения HTTP-заголовков последнего ответа сервера.

В метод `setCredentials()` передаются:

1. Логин вашей учётной записи bronevik.com.
2. Пароль от учётной записи bronevik.com
3. Ключ клиента. Выдаётся только после заключения договора на использование сервиса.

Метод `setLanguage()` принимает только `\Bronevik\HotelsConnector\Enum\Languages::RUSSIAN` или
`\Bronevik\HotelsConnector\Enum\Languages::ENGLISH`.

### Проверка подключения

Строка переданная в метод `ping()` будет отправлена сервером обратно.

```php
<?php

echo $connector->ping('Привет, Броневичок!'); // Привет, Броневичок!
```

## Документация по работе с SOAP сервером без использования этого коннектора

Документация в формате PDF: https://hotels-api.bronevik.com/v2.2.0/api.pdf

Следует упомянуть, что при вызове метода `SearchHotelOffersRequest` параметр `currency` является обязательным и сейчас
у него только одно возможное значение: `rub`. Без заполнения этого параметра сервис вернёт сообщение об ошибке.

## Документация по работе с клиентом и примеры

### Справочники

#### Получение списка стран

Запрос:

```php
<?php

/** @var Bronevik\HotelsConnector\Element\Country[] $countries */
$countries = $connector->getCountries();
```
Разбор результата:
```php
<?php

/** @var Bronevik\HotelsConnector\Element\Country[] $countries */
foreach ($countries as $country) {
    $country->getId();   // 1
    $country->getCode(); // RUS
    $country->getName(); // Россия
}
```

#### Получение списка городов

В метод `getCities()` нужно передать Id страны.

```php
<?php

/** @var Bronevik\HotelsConnector\Element\City[] $cities */
$cities = $connector->getCities(1);
```
Разбор результата:
```php
<?php

/** @var Bronevik\HotelsConnector\Element\City[] $cities */
foreach ($cities as $city) {
    $city->getId();         // 539
    $city->getName();       // Абаза
    $city->getRegionId();   // 102
    $city->getRegionName(); // Хакасия
    $city->getLatitude();   // 52.6439447
    $city->getLongitude();  // 90.1039492
}
```

#### Получение списка удобств

Запрос:
```php
<?php

/** @var Bronevik\HotelsConnector\Element\Amenity[] $amenities */
$amenities = $connector->getAmenities();
```
Разбор результата:
```php
<?php

/** @var Bronevik\HotelsConnector\Element\Amenity[] $amenities */
foreach ($amenities as $amenity) {
    $amenity->getId();        // 5
    $amenity->getName();      // Трансфер
    $amenity->getGroupName(); // Общие услуги отеля
}
```

#### Получение списка питания
```php
<?php

/** @var Bronevik\HotelsConnector\Element\Meal[] $meals */
$meals = $connector->getMeals();
```
Разбор результата:
```php
<?php

/** @var Bronevik\HotelsConnector\Element\Meal[] $meals */
foreach ($meals as $meal) {
    $meal->getId();   // 2
    $meal->getName(); // Завтрак континентальный
}
```

### Поиск предложений отелей

#### Простой запрос

```php
<?php

/** @var Bronevik\HotelsConnector\Element\Hotels $hotelsWithOffers */
$hotelsWithOffers = $connector->searchHotelOffers(
    '2016-01-22', // дата заезда
    '2016-01-24', // дата выезда
    1             // Id города
);
```

#### Запрос с фильтрацией предложений

```php
<?php

// Массив фильтров
$criteria = [];

// Фильтр предложений по категории отеля (количеству звёзд)
$criterion = new Bronevik\HotelsConnector\Element\SearchOfferCriterionHotelCategory();
$criterion->addCategory(4);
$criterion->addCategory(5);
$criteria[] = $criterion;

// Фильтр предложений по количеству гостей
$criterion = new Bronevik\HotelsConnector\Element\SearchOfferCriterionNumberOfGuests();
$criterion->setAdults(2);
$criteria[] = $criterion;

// Фильтр предложений по возможности моментального подтверждения бронирования (онлайн)
$criterion  = new Bronevik\HotelsConnector\Element\SearchOfferCriterionOnlyOnline();
$criteria[] = $criterion;

// фильтр по названию отеля
$criterion  = new Bronevik\HotelsConnector\Element\SearchOfferCriterionHotelName();
$criterion->setName('Название отеля');
$criteria[] = $criterion;

// фильтр предложений по включенному завтраку
$criterion  = new Bronevik\HotelsConnector\Element\SearchOfferCriterionBreakfastIncluded();
$criteria[] = $criterion;

// фильтр предложений по способу оплаты
$criterion  = new Bronevik\HotelsConnector\Element\SearchOfferCriterionPaymentRecipient();
// в качестве paymentRecipient можно использовать только константы \Bronevik\HotelsConnector\Enum\PaymentRecipients
$criterion->addPaymentRecipient(Bronevik\HotelsConnector\Enum\PaymentRecipients::HOTEL); // оплата в отеле
$criterion->addPaymentRecipient(Bronevik\HotelsConnector\Enum\PaymentRecipients::AGENCY); // безналичный расчёт
$criteria[] = $criterion;

/** @var Bronevik\HotelsConnector\Element\Hotels $hotelsWithOffers */
$hotelsWithOffers = $connector->searchHotelOffers(
    '2016-01-22', // дата заезда
    '2016-01-24', // дата выезда
    1,            // Id города
    $criteria     // массив фильтров
);
```

#### Запрос предложений конкретных отелей

```php
<?php

/**
 * Фильтр предложений по конкретным отелям (по ids отелей)
 * Можно указать до 100 отелей
 * @var int[]
*/
$hotelIds = [1, 2, 3];

/** @var Bronevik\HotelsConnector\Element\Hotels $hotelsWithOffers */
$hotelsWithOffers = $connector->searchHotelOffers(
    '2016-01-22', // дата заезда
    '2016-01-24', // дата выезда
    null,         // Id города
    [],           // массив фильтров
    $hotelIds     // ids отелей
);
```

#### Управление содержимым ответа

Вы можете пропустить некоторые элементы в поиске:

```php
<?php

$skipElements = [
    Bronevik\HotelsConnector\Enum\SkipElementTypes::DAILY_PRICES, // ежедневные цены
    Bronevik\HotelsConnector\Enum\SkipElementTypes::DESCRIPTION_DETAILS, // описание отеля
];

// Все доступные для пропуска элементы для SearchHotelOffers - \Bronevik\HotelsConnector\Enum\SkipElementTypes::$availableSkipElementsForSearchHotelOffers

/** @var Bronevik\HotelsConnector\Element\Hotels $hotelsWithOffers */
$hotelsWithOffers = $connector->searchHotelOffers(
    '2016-01-22', // дата заезда
    '2016-01-24', // дата выезда
    1,            // Id города
    [],           // массив фильтров
    [],           // ids отелей
    $skipElements // элементы для пропуска
);
```

#### Отельное предложение

```php
<?php

/** @var Bronevik\HotelsConnector\Element\Hotels $hotelsWithOffers */
foreach ($hotelsWithOffers->getHotel() as $hotelWithOffers) {
    $hotelWithOffers->getId();                 // Id отеля (например, 716)
    $hotelWithOffers->getCityId();             // Id города (например, 1)
    $hotelWithOffers->getCityName();           // Название города (например, Екатеринбург)
    $hotelWithOffers->getName();               // Название отеля (например, Октябрьская)
    $hotelWithOffers->getAddress();            // Адрес отеля (например, ул. Софьи Ковалевской, 17)
    $hotelWithOffers->getCategory();           // Количество звезд в отеле (например, 4)
    $hotelWithOffers->getCheckinTime();        // Расчётный час заезда (например, 12:00:00)
    $hotelWithOffers->getCheckoutTime();       // Расчётный час выезда (например, 12:00:00)
    $hotelWithOffers->getIsFixedCheckinTime(); // Фиксирован ли час заезда? (например, true)
    $hotelWithOffers->getVatApplicable();      // Применим ли к отелю НДС? (например, true)
    $hotelWithOffers->getVatIncluded();        // Включен ли НДС? (например, true)
    $hotelWithOffers->getVATPercent();         // Процент НДС (например, 20)
    $hotelWithOffers->getHasTaxes();           // Наличие в отеле дополнительных сборов (например, false)
    $hotelWithOffers->getType();               // Тип отеля (например, hotel)

    // Комментарий для гостя
    $hotelWithOffers->getInformationForGuest()->getComment();

    // Услуги отеля
	/** @var Bronevik\HotelsConnector\Element\HotelAmenity $amenity */
    foreach ($hotelWithOffers->getAmenities() as $amenity) {
        $amenity->getName(); // Название услуги
        $amenity->getType(); // Тип услуги
    }

    // Описание отеля
    /** @var Bronevik\HotelsConnector\Element\DescriptionDetails $descriptionDetails */
    /**
     * Примечание: если в skipElements одним из элементов указать
     * @see \Bronevik\HotelsConnector\Enum\SkipElementTypes::DESCRIPTION_DETAILS
     * То $hotelWithOffers->getDescriptionDetails() вернет пустой объект                                                                  
     */
    $descriptionDetails = $hotelWithOffers->getDescriptionDetails();

    $descriptionDetails->getCountryId();        // Id страны (например, 1)
    $descriptionDetails->getCountryName();      // Название страны (например, Россия)
    $descriptionDetails->getDistanceToCenter(); // Расстояние до центра в км (например, 1)
    $descriptionDetails->getLatitude();         // Широта (например, 56.8499105)
    $descriptionDetails->getLongitude();        // Долгота (например, 60.6525664)
    $descriptionDetails->getDescription();      // Описание отеля

	// Фотографии отеля
	/** @var Bronevik\HotelsConnector\Element\Image $photo */
    foreach ($descriptionDetails->getPhotos() as $photo) {
        $photo->getGuid(); // 73c7c9b97a36ac0d970990937d842417
        $photo->getUrl();  // //dev.bronevik.com/static/photo/g/250x250a/73c7c9b97a36ac0d970990937d842417
    }

    /** @var Bronevik\HotelsConnector\Element\AvailableAmenity $amenity */
    foreach ($descriptionDetails->getAvailableAmenities() as $amenity) {
        $amenity->getId(); // 1
        $amenity->getIncluded(); // false
        $amenity->getPrice(); // 125.00 
    }

    // предложения
    $offers = $hotelWithOffers->getOffers();

	/** @var Bronevik\HotelsConnector\Element\HotelOffer $offer */
    foreach ($offers->getOffer() as $offer) {
        $offer->getCode();                  // Код предложения (например, T1I3MTYjI2RvdWJsZSMxMDY0IzIwMTYtMDEtMjIjMjAxNi0wMS0yNCMyLDE=)
        $offer->getName();                  // Название предложения (например, Люкс)
        $offer->getLhp();                   // Флаг наличия lhp-цен в предложении (например, true)
        $offer->getNonRefundable();         // Является ли предложение невозвратным (например, false)
        $offer->getCurrency();              // Валюта оплаты (например, RUB)
        $offer->getImmediateConfirmation(); // Возможно ли немедленное подтверждение (например, true)
        $offer->getFreeRooms();             // Количество свободных номеров (например, 5)
        $offer->getRoomId();                // Id номера (например, 24)
        $offer->getRoomType();              // Тип размещения (например, single)
        $offer->getIsSharedRoom();          // Является ли номер номером с подселением (например, false)
        $offer->getIsBlockRoom();           // Является ли номер блочным (например, false)
        $offer->getPaymentRecipient();      // Способ оплаты (например, \Bronevik\HotelsConnector\Enum\PaymentRecipients::AGENCY)
        $offer->getDeepLink();              // ​Элемент для работы метапоисковых систем (например, http://dev.bronevik.com/ru/hotel/russia/yekaterinburg/oktyabrskaya?sd=2019-06-01&ed=2019-06-02&code=T1I3MTYjOTgxNSNzaW5nbGUjMjQjMjAxOS0wNi0wMSMyMDE5LTA2LTAyIzIjMA==&currency=RUB&spk=Corteos)


        /**
          * Детализация стоимости 
          * 
          * @var Bronevik\HotelsConnector\Element\PriceDetails $priceDetails
          */
        $priceDetails = $offer->getPriceDetails();
        $priceDetails->getVatApplicable();              // Применим ли к отелю НДС
        $clientDetails    = $priceDetails->getClient(); // Детализация клиентской стоимости
        $hotelDetails     = $priceDetails->getHotel();  // Детализация отельной стоимости
        $additionalPrices = $priceDetails->getExtra();  // Дополнительные цены

        $clientDetails->getVatIncluded(); // Включен ли НДС в клиентскую стоимость
        $clientDetails->getCommission();  // Информация о комиссии
        $clientDetails->getGross();       // Брутто-стоимость
        $clientDetails->getNet();         // Нетто-стоимость

        /**
         * @var Bronevik\HotelsConnector\Element\ClientPriceDetails $clientDetails
         * getGross, getNet, getCommission возвращают объект DetailedPrice, который содержит в себе:
         */
        $clientDetails->getGross()->getCurrency();  // Валюта
        $clientDetails->getGross()->getPrice();     // Стоимость
        $clientDetails->getGross()->getVatAmount(); // Сумма ндс

        $hotelDetails->getVatIncluded(); // Включен ли НДС в отельную стоимость

        foreach ($additionalPrices as $detailedPrice) {
            $detailedPrice->getName();      // Наименование цены
            $detailedPrice->getVatAmount(); // Сумма ндс
            $detailedPrice->getPrice();     // Стоимость
            $detailedPrice->getCurrency();  // Валюта
        }

        /** @var Bronevik\HotelsConnector\Element\Tax $tax */
        // Дополнительные сборы при заселении
        foreach ($offer->getTaxes() as $tax) {
            $tax->getCurrency(); // Валюта оплаты
            $tax->getComment();  // Комментарий
            $tax->getType();     // Тип сбора
            $tax->getAmount();   // Величина сбора
            $tax->getIncluded(); // Включен ли сбор в стоимость предложения
        }

    	/** @var Bronevik\HotelsConnector\Element\HotelOfferCancellationPolicy $cancellationPolicy */
    	// политика аннуляции
        foreach ($offer->getCancellationPolicies() as $cancellationPolicy) {
            $cancellationPolicy->getPenaltyDateTime(); // Дата наступления штрафа
            $cancellationPolicy->getPenaltySum();      // Размер штрафа
        }

        /** @var Bronevik\HotelsConnector\Element\AvailableMeal $meal */
        // питание
        foreach ($offer->getMeals() as $meal) {
            $meal->getId();       // Идентификатор услуги питания
            $meal->getIncluded(); // Включена ли услуга в предложение
            $meal->getPrice();    // Стоимость услуги питания
        }

        // ежедневные цены
        /** @var Bronevik\HotelsConnector\Element\DailyPrice $dailyPrice */
        /**
         * Примечание: если в skipElements одним из элементов указать
         * @see \Bronevik\HotelsConnector\Enum\SkipElementTypes::DAILY_PRICES
         * То массив $offer->getDailyPrices() будет пустой                                                                  
         */
        foreach ($offer->getDailyPrices() as $dailyPrice) {
            $dailyPrice->getDate();          // Дата, на которую рассчитана цена
            $dailyPrice->getBookingFee();    // Стоимость брони в отеле
            $dailyPrice->getEarlyArrival();  // Стоимость раннего заезда
            $dailyPrice->getLateDeparture(); // Стоимость позднего выезда
            $dailyPrice->getRate();          // Стоимость номера
         
            // Стоимость платного питания
            /** @var Bronevik\HotelsConnector\Element\MealPriceDetails $mealPriceDetails */
            foreach ($dailyPrice->getMeals()->meal as $mealPriceDetails) {
                $mealPriceDetails->getId();          // Идентификатор услуги питания
                $mealPriceDetails->getCommission();  // Информация о комиссии
                $mealPriceDetails->getGross();       // Брутто-стоимость
                $mealPriceDetails->getNet();         // Нетто-стоимость
                $mealPriceDetails->getVatIncluded(); // Включен ли НДС в клиентскую стоимость
                $mealPriceDetails->getIncluded();    // Включена ли услуга в предложение
            }
            /**
             * getBookingFee, getEarlyArrival, getLateDeparture, getRate возвращает объект ClientPriceDetails, который описан чуть выше
             * @see \Bronevik\HotelsConnector\Element\ClientPriceDetails
             */
        }

        // Правила предоставления предложения
        /** @var Bronevik\HotelsConnector\Element\OfferPolicy $offerPolicy */
        foreach ($offer->getOfferPolicies() as $offerPolicy) {
            $offerPolicy->description; // описание
        }
    }
}
```

### Получение информации об отелях

Метод `getHotelInfo()` принимает массив идентификаторов отелей.

Возвращает те же данные, что и метод `searchHotelOffers()`, но без информации о предложениях, с информацией о номерах в отеле.

```php
<?php

/** @var Bronevik\HotelsConnector\Element\HotelWithInfo[] $hotelsWithInfo */
$hotelsWithInfo = $connector->getHotelInfo([716, 901]);
```

Ответ:

```php
<?php

/** @var Bronevik\HotelsConnector\Element\HotelWithInfo[] $hotelsWithInfo */
foreach ($hotelsWithInfo as $hotelWithInfo) {
    /** @var Bronevik\HotelsConnector\Element\HotelRoom $hotelRoom */
    foreach ($hotelWithInfo->getRooms() as $hotelRoom) {
        $hotelRoom->getId();           // Id номера
        $hotelRoom->getName();         // Название номера
        $hotelRoom->getDescription();  // Описание номера
        $hotelRoom->getRoomCapacity(); // Количество гостей, которых можно разместить в номере
        $hotelRoom->getSize();         // Площадь номера

        // Удобства в номере
        /** @var Bronevik\HotelsConnector\Element\AvailableAmenity $availableAmenity */
        foreach ($hotelRoom->getAvailableAmenities() as $availableAmenity) {
            $availableAmenity->getId();
            $availableAmenity->getPrice();
            $availableAmenity->getIncluded();
        }

        // Фотограции номера
        /** @var Bronevik\HotelsConnector\Element\Image $photo */
        foreach ($hotelRoom->getPhotos() as $photo) {
            $photo->getUrl();
            $photo->getGuid();
        }

        // размещения кроватей в номере
        /** @var Bronevik\HotelsConnector\Element\BedSets $bedSets */
        $bedSets = $hotelRoom->getBedSets();

        // Массив вариантов комбинаций кроватей
        /** @var Bronevik\HotelsConnector\Element\BedSet $bedSet */
        foreach ($bedSets->getBedSet() as $bedSet) {
            // Вариант размещения кроватей
            /** @var Bronevik\HotelsConnector\Element\Bed $bed */
            foreach ($bedSet->getBed() as $bed) {
                $bed->getType();   // Тип размещения в номере
                $bed->getAmount(); // Количество кроватей
            }
        }
    }
}
```

### Получение информации о предложении отеля

Метод `getHotelOffer()` принимает код предложения.

Возвращает те же данные, что и метод `searchHotelOffers()`.

```php
<?php

/**
 * Также есть возможность управлять содержимым ответа
 * Все возможные элементы, которые можно пропустить здесь:
 * @see \Bronevik\HotelsConnector\Enum\SkipElementTypes::$availableSkipElementsForGetHotelOffer
 */
$skipElements = [Bronevik\HotelsConnector\Enum\SkipElementTypes::DAILY_PRICES];

/** @var Bronevik\HotelsConnector\Element\HotelOffer $offer */
$offer = $connector->getHotelOffer(
    'T1I3MTYjI2RvdWJsZSMxMDY0IzIwMTYtMDEtMjIjMjAxNi0wMS0yNCMyLDE=',
    $skipElements
);
```

### Заказ бронирования проживания и операции с заказами

#### Создание заказа

Заказ бронирования осуществляется на основе предложения `\Bronevik\HotelsConnector\Element\HotelOffer`. На каждый
бронируемый номер необходимо создать объект услуги проживания (`$accomodation`). Все объекты услуг добавляются в заказ.

В этом примере заказывается бронирование двух номеров для четырёх человек:

```php
<?php

/** @var Bronevik\HotelsConnector\Element\HotelOffer $offer */
$offer = $connector->getHotelOffer('T1I3MTYjI2RvdWJsZSMxMDY0IzIwMTYtMDEtMjIjMjAxNi0wMS0yNCMyLDE=');

// Создание запроса на бронирование номеров
$orderRequest = new Bronevik\HotelsConnector\Element\CreateOrderRequest();
$orderRequest->setContactPerson('Григорий');
$orderRequest->setContactEmail('grigoriy@example.com');
$orderRequest->setContactPhone('+79991234567');
$orderRequest->setComment('Гости приедут в районе 18 часов.');

// Создание услуг проживания и привязка их к заказу.
$accommodation = new Bronevik\HotelsConnector\Element\ServiceAccommodation;
$accommodation->setOfferCode($offer->getCode());
$accommodation->setComment('Гостям потребуется высокоскоростное подключение к Интернет.');
$accommodation->addGuests('Валентин');
$accommodation->addMeals(2);            // Добавить питание в услугу
$accommodation->addMeals(34);           // Если нужно несколько услуг питания
$accommodation->setCheckinHour(10);     // Установить час заезда
$accommodation->setCheckoutHour(8);     // Установить час выезда
$accommodation->setSellingPrice(1000);  // Установить желаемую цену продажи
$accommodation->setReferenceId('test'); // Установить номер услуги в системе клиента
// также можно добавить доп. поля для создания услуг
$serviceExtraField = new Bronevik\HotelsConnector\Element\ServiceExtraField();
$serviceExtraField->setName('name');
$serviceExtraField->setValue('value');
$accommodation->addExtraField($serviceExtraField);

$orderRequest->addServices($accommodation);

// Нужно создавать по услуге на каждый бронируемый номер.
$accommodation = new Bronevik\HotelsConnector\Element\ServiceAccommodation;
$accommodation->setOfferCode($offer->getCode());
$accommodation->setComment('Не представлять напитки из минибара.');
$accommodation->addGuests('Николай');
$accommodation->addGuests('Эльдар');
$orderRequest->addServices($accommodation);

// Отправка заказа
/** @var Bronevik\HotelsConnector\Element\Order $order */
$order = $connector->createOrder($orderRequest);
```

Разбор результата:

```php
<?php

/** @var Bronevik\HotelsConnector\Element\Order $order */
$order->getId();            // Id заказа
$order->getComment();       // Комментарий к заказу, который был указан при создании
$order->getContactPerson(); // Контактное лицо
$order->getContactPhone();  // Контактный телефон
$order->getContactEmail();  // Контактный email

/** @var Bronevik\HotelsConnector\Element\OrderServiceAccommodation $service */
foreach ($order->getServices() as $service) {
    $service->getId();               // Id услуги
    $service->getDate();             // Дата создания услуги
    $service->getComment();          // Комментарий к услуге, который был указан при создании
    $service->getPaymentRecipient(); // Способ оплаты, возможные значения: \Bronevik\HotelsConnector\Enum\PaymentRecipients
    $service->getIsBlockRoom();      // Блочный ли номер?
    $service->getRoomId();           // Id номера
    $service->getCountryId();        // Id страны
    $service->getCountryName();      // Название страны
    $service->getCityId();           // Id города
    $service->getCityName();         // Название города
    $service->getHotelId();          // Id отеля
    $service->getHotelName();        // Название отеля
    $service->getReferenceId();      // Номер услуги в системе клиента
    $service->getStatusId();         // Id статуса
    $service->getStatusName();       // Название статуса
    $service->getCheckin();          // Час заезда
    $service->getCheckout();         // Час выезда
    $service->getNonRefundable();    // Является ли тариф невозвратным?
    $service->getOfferCode();        // Код предложения, с помощью которого оформлена услуга
    $service->getOfferName();        // Название предложения
    $service->getRoomType();         // Тип размещения

    /** @var Bronevik\HotelsConnector\Element\ServiceExtraField $serviceExtraField */
    // доп. поля для создания услуг
    foreach ($service->getExtraField() as $serviceExtraField) {
        $serviceExtraField->getName();  // Название
        $serviceExtraField->getValue(); // Значение
    }

    // ежедневные цены
    /** @var Bronevik\HotelsConnector\Element\DailyPrice $dailyPrice */
    foreach ($service->getDailyPrices()->dailyPrice as $dailyPrice) {
        // аналогично dailyPrice в SearchHotelOffers
        $dailyPrice->getDate();          // Дата, на которую рассчитана цена
        $dailyPrice->getBookingFee();    // Стоимость брони в отеле
        $dailyPrice->getEarlyArrival();  // Стоимость раннего заезда
        $dailyPrice->getLateDeparture(); // Стоимость позднего выезда
        $dailyPrice->getRate();          // Стоимость номера
    }

    // гости
    foreach ($service->getGuests() as $guest) {
        /** @var string $guest */
        echo $guest;
    }

    // договор, привязанный к услуге
    /** @var Bronevik\HotelsConnector\Element\Contract $contract */
    $contract = $service->getContract();
    $contract->getId();          // Id договора
    $contract->getNumber();      // Номер договора
    $contract->getBeginsAt();    // Дата начала действия договора
    $contract->getLegalEntity(); // Юридическое лицо

    $service->getPriceDetails();         // аналогично как и для SearchHotelOffers
    $service->getCancellationPolicies(); // аналогично как и для SearchHotelOffers
    $service->getMeals();                // аналогично как и для SearchHotelOffers
    $service->getOfferPolicies();        // аналогично как и для SearchHotelOffers
}
```

#### Получение информации о заказе

Метод `getOrder()` принимает Id заказа.

Возвращает те же данные, что и метод createOrder().

```php
<?php

/** @var Bronevik\HotelsConnector\Element\Order $order */
$order = $connector->getOrder(349007);
```

#### Отмена заказа

```php
<?php

/** @var Bronevik\HotelsConnector\Element\Order $order */
/** @var bool $cancelResult */
$cancelResult = $connector->cancelOrder($order->getId());
```

#### Поиск заказов

```php
<?php

// критерии поиска
$criteria = [];

// поиск по id заказа
$criterion = new Bronevik\HotelsConnector\Element\SearchOrderCriterionOrderId();
$criterion->setOrderId(123); // id заказа
$criteria[] = $criterion;

// поиск по id услуги
$criterion = new Bronevik\HotelsConnector\Element\SearchOrderCriterionServiceId();
$criterion->setServiceId(123); // id услуги
$criteria[] = $criterion;

// поиск по номеру услуги в системе клиента
$criterion = new Bronevik\HotelsConnector\Element\SearchOrderCriterionServiceReferenceId();
$criterion->setReferenceId(123); // номер услуги в системе клиента
$criteria[] = $criterion;

// поиск по дате создания заказа
$criterion = new Bronevik\HotelsConnector\Element\SearchOrderCriterionCreateDate();
$criterion->setDateStart('2019-01-01'); // начальная дата периода поиска
$criterion->setDateEnd('2019-01-10');   // конечная дата периода поиска
$criteria[] = $criterion;

// поиск по дате заезда
$criterion = new Bronevik\HotelsConnector\Element\SearchOrderCriterionArrivalDate();
$criterion->setDateStart('2019-01-01'); // начальная дата периода поиска
$criterion->setDateEnd('2019-01-10');   // конечная дата периода поиска
$criteria[] = $criterion;

// поиск по дате выезда
$criterion = new Bronevik\HotelsConnector\Element\SearchOrderCriterionDepartureDate();
$criterion->setDateStart('2019-01-01'); // начальная дата периода поиска
$criterion->setDateEnd('2019-01-10');   // конечная дата периода поиска
$criteria[] = $criterion;

// поиск по имени гостя
$criterion = new Bronevik\HotelsConnector\Element\SearchOrderCriterionGuest();
$criterion->setName('Имя гостя'); // Имя гостя
$criteria[] = $criterion;

$orders = $connector->searchOrders($criteria);
```

### Услуги

#### История изменений

##### Получение записей истории изменений

Также есть возможность посмотреть историю изменений по всем услугам клиента.

```php
<?php

/** @var Bronevik\HotelsConnector\Element\OrdersChangelogRecord[] $changelogRecords */
$changelogRecords = $connector->GetOrdersChangelog();

/** @var Bronevik\HotelsConnector\Element\OrdersChangelogRecord[] $changelogRecords */
foreach ($changelogRecords as $changelogRecord) {
    $changelogRecord->getId();                    // идентификатор записи
    $changelogRecord->getOrderId();               // номер заказа
    $changelogRecord->getServiceId();             // номер услуги
    $changelogRecord->getReferenceId();           // номер услуги в системе клиента
    $changelogRecord->getCreatedAt();             // дата создания записи об изменениях
    $changelogRecord->getServiceCreationSource(); // ресурс, откуда создана услуга

    /** @var Bronevik\HotelsConnector\Element\ChangeList $changes */
    $changes = $changelogRecord->getChangeList();
    
    /** @var Bronevik\HotelsConnector\Element\Change $change */
    foreach ($changes->change as $change) {
        $change->getElement();  // Название элемента
        $change->getNewValue(); // Его новое значение
    }
}

```

##### Удаление записей из истории изменений

Для того, чтобы удалить записи истории изменений изменений, нужно воспользоваться операцией RemoveOrdersChangelogRecords и в качестве
аргумента передать массив идентификаторов записей.

```php
<?php

// идентификаторы записей в историю изменений
$ids = [1, 2, 3];

/** @var string $status */
$status = $connector->RemoveOrdersChangelogRecords($ids);

// при успешном удалении записей будет возвращен статус 'ok'
// в случае ошибки будет выброшено исключение
```

#### Комментарии

##### Получение комментариев

Для получения комментариев необходимо воспользоваться операцией getServiceMessages.
В качестве аргуметов можно передать id услуги или ids сообщений.
>Примечание. Если передать и id услуги, и ids сообщений, то будет осуществлен поиск ids комментариев в этой услуге.

```php
<?php

// идентификаторы записей в историю изменений
$serviceId  = 123;       // id услуги
$messageIds = [1, 2, 3]; // ids сообщений

/** @var Bronevik\HotelsConnector\Element\Messages $messages */
$messages = $connector->getServiceMessages(
    $serviceId,
    $messageIds
);

/** @var Bronevik\HotelsConnector\Element\Message $message */
foreach ($messages->getMessage() as $message) {
    $message->getId();         // id сообщения
    $message->getServiceId();  // id услуги
    $message->getDate();       // Дата и время отправки комментария.
    $message->getSenderName(); // Имя отправителя комментария
    $message->getSenderType(); // Тип отправителя: менеджер или клиент.
    $message->getText();       // Текст комментария
}
```

##### Отправка комментариев

Для отправки комментария нужно передать id услуги и текст комментария. В качестве ответа будет id только что созданного комментария.

```php
<?php

// идентификаторы записей в историю изменений
$serviceId = 123;                 // id услуги
$text      = 'Текст комментария'; // Текст комментария

/** @var int $messageId */
$messageId = $connector->sendServiceMessage(
    $serviceId,
    $text
);

``` 


#### Детализация предложения

Для получения детализации предложений можно воспользоваться операцией GetHotelOfferPricing, 
которая позволяет просмотреть подробную детализацию услуг, не создавая заказа. 

```php
<?php

// массив услуг
$services = [];

// Проживание создается также как и для создания заказа
$accommodation = new Bronevik\HotelsConnector\Element\ServiceAccommodation;
$accommodation->setOfferCode('offer-code');
$accommodation->setComment('Гостям потребуется высокоскоростное подключение к Интернет.');
$accommodation->addGuests('Валентин');

$services[] = $accommodation;

// Нужно создавать по услуге на каждый бронируемый номер.
$accommodation = new Bronevik\HotelsConnector\Element\ServiceAccommodation;
$accommodation->setOfferCode('offer-code');
$accommodation->setComment('Не представлять напитки из минибара.');
$accommodation->addGuests('Николай');
$services[] = $accommodation;

/** @var Bronevik\HotelsConnector\Element\OrderServiceAccommodation[] $orderServices */
$orderServices = $connector->GetHotelOfferPricing($services);

// объект услуги в ответе точно такой же как и при создании заказа
```

#### Ошибки

В случае внутренней ошибки API, возвращается SoapFault

>Примечание. Описания ошибок (коды, описания ошибок и их текст) можно найти в документации в разделе `Коды ошибок`
```php
<?php

try {
    $connector->getMeals();
}
catch (SoapFault $e) {
    /** @var \StdClass $detail */
    $detail = $e->detail->Fault;

    $detail->traceId; // Id запроса
    $detail->code;    // Код ошибки
}
```