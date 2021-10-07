# Коннектор для SOAP-сервиса hotels-api.bronevik.com

[![Build Status](https://travis-ci.org/bronevik-com/hotels-connector.svg?branch=master)](https://travis-ci.org/bronevik-com/hotels-connector)

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
        - [Поиск предложений по геокоординатам и радиусу](#Поиск-предложений-по-геокоординатам-и-радиусу)
        - [Управление содержимым ответа](#Управление-содержимым-ответа)
        - [Объект отельного предложения](#Отельное-предложение)
    - [Получение информации об отелях](#Получение-информации-об-отелях)
    - [Получение информации о предложении отеля](#Получение-информации-о-предложении-отеля)
    - [Заказ бронирования проживания и операции с заказами](#Заказ-бронирования-проживания-и-операции-с-заказами)
        - [Создание заказа](#Создание-заказа)
        - [Создание заказа с данными банковской карты](#Создание-заказа-с-данными-банковской-карты)
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
    - [Обновление referenceId услуги](#Обновление-referenceId-услуги)
    - [Аннуляция услуг](#Аннуляция-услуг)
    - [Безрейтовый поиск](#Безрейтовый-поиск)
        - [Поиск по городу](#Поиск-по-городу)
        - [Поиск по отелям](#Поиск-по-отелям)
        - [Поиск по координатам и радиусу](#Поиск-по-координатам-и-радиусу)
        - [Поиск с критериями](#Поиск-с-критериями)
        - [Управление содержимым ответа поиска](#Управление-содержимым-ответа-поиска)
        - [Ответ безрейтового поиска](#Ответ-безрейтового-поиска)
    - [Запрос цен за РЗПВ](#Запрос-цен-за-РЗПВ)
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

$connector = new Bronevik\HotelsConnector(
    Bronevik\HotelsConnector\Enum\Endpoints::DEVELOPMENT,
    Bronevik\HotelsConnector\Enum\Endpoints::SECURE_DEVELOPMENT,
    true
);
$connector->setCredentials('login', 'password', 'privateKey');
$connector->setLanguage(Bronevik\HotelsConnector\Enum\Languages::RUSSIAN);
```

В конструктор коннектора передаётся `endpoint` SOAP-сервера и флаг `debugMode`.

Для `endpoint` возможны два значения:

1. `\Bronevik\HotelsConnector\Enum\Endpoints::DEVELOPMENT` - для разработки, запросы отправляются на тестовый сервер.
1. `\Bronevik\HotelsConnector\Enum\Endpoints::PRODUCTION` - для использования в бою.

Для `secureEndpoint` возможны два значения:

1. `\Bronevik\HotelsConnector\Enum\Endpoints::SECURE_DEVELOPMENT` - для разработки, запросы отправляются на тестовый сервер.
1. `\Bronevik\HotelsConnector\Enum\Endpoints::SECURE_PRODUCTION` - для использования в бою.

Флаг `debugMode`, установленный в `true`, позволяет использовать следующие методы:

1. `$connector->getLastResponse()` для получения содержимого последнего ответа сервера.
1. `$connector->getLastResponseHeaders()` для получения HTTP-заголовков последнего ответа сервера.
1. `$connector->getLastRequest()` для получения содержимого последнего запроса сервера.
1. `$connector->getLastRequestHeaders()` для получения HTTP-заголовков последнего запроса сервера.

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

Документация в формате PDF: https://hotels-api.bronevik.com/v2.5.0/api.pdf

Следует упомянуть, что при вызове метода `SearchHotelOffersRequest` параметр `currency` является обязательным и сейчас
у него только одно возможное значение: `rub`. Без заполнения этого параметра сервис вернёт сообщение об ошибке.

## Документация по работе с клиентом и примеры

### Справочники

#### Коррекция услуги

Запрос:

```php
<?php
    $serviceId = 1; // Id услуги
    $updateService = new \Bronevik\HotelsConnector\Element\UpdateService();
    $updateService->setArrivalDate("2021-09-18"); // Коррекция даты заезда
    $updateService->setDepartureDate("2021-09-22"); //  Коррекция даты выезда
    $updateService->setReferenceId(1); // Коррекция номера услуги в системе клиента
    $addMeals = new \Bronevik\HotelsConnector\Element\MealIds();
    $addMeals->addMeal(1); // id услуги питания 
    $removeMeals = new \Bronevik\HotelsConnector\Element\MealIds();
    $removeMeals->addMeal(2); // id услуги питания 
    $updateService->setAddMeals($addMeals); // Добавить питание в услугу
    $updateService->setRemoveMeals($removeMeals); // Удалить питание из услуги 
    $updateService->setCheckinHour(15); // Коррекция часа заезда
    $updateService->setCheckoutHour(21); // Коррекция часа выезда
    $updateService->setComment('Комментарий'); // Коррекция комментария к услуге
    
    $response = $connector->updateService($serviceId, $updateService);
```

Запрос для коррекции цены продажи:

```php
<?php
    $serviceId = 1; // Id услуги
    $updateService = new \Bronevik\HotelsConnector\Element\UpdateService();
    $updateService->setSellingPrice(100); // Цена продажи
    
    $response = $connector->updateService($serviceId, $updateService);
```

Разбор результатов:

```php
<?php
/** @var \Bronevik\HotelsConnector\Element\GetServicePricingResponse $response */
$order = $response->getOrder();
$order->getId();            // Id заказа
$order->getComment();       // Комментарий к заказу, который был указан при создании
$order->getContactPerson(); // Контактное лицо
$order->getContactPhone();  // Контактный телефон
$order->getContactEmail();  // Контактный email

/** @var Bronevik\HotelsConnector\Element\OrderServiceAccommodation $service */
foreach ($order->getServices()->service as $service) {
    $service->getId();               // Id услуги
    $service->getDate();             // Дата создания услуги
    $service->getComment();          // Комментарий к услуге, который был указан при создании
    $service->getPaymentRecipient(); // Способ оплаты, возможные значения: \Bronevik\HotelsConnector\Enum\PaymentRecipients
    $service->getIsBlockRoom();      // Блочный ли номер?
    $service->getIsSharedRoom();     // Является ли номер номером с подселением?
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
    $service->getVATPercent();       // Ставка НДС
    $service->getGuaranteeType();    // Тип гарантии
    $service->getGuests();           // Гости услуги
    $service->getPaymentTerms()      // Условия оплаты
   
    // информация о тарифе
    /** @var Bronevik\HotelsConnector\Element\RateType $rateType */
    $rateType = $service->getRateType();
    /**
     * Название тарифа
     * @see \Bronevik\HotelsConnector\Enum\RateTypeNames
     */
    $rateType->getRateName();
    $rateType->getRateDescription(); // Описание тарифа

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
        /** @var Bronevik\HotelsConnector\Element\Guest $guest */
        echo $guest->getLastName() . ' ' . $guest->getFirstName();
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


#### Получение стоимость услуги с учетом коррекции

Запрос:

```php
<?php
    $serviceId = 1; // Id услуги
    $updateService = new \Bronevik\HotelsConnector\Element\UpdateService();
    $updateService->setArrivalDate("2021-09-18"); // Коррекция даты заезда
    $updateService->setDepartureDate("2021-09-22"); //  Коррекция даты выезда
    $updateService->setReferenceId(1); // Коррекция номера услуги в системе клиента
    $addMeals = new \Bronevik\HotelsConnector\Element\MealIds();
    $addMeals->addMeal(1); // id услуги питания 
    $removeMeals = new \Bronevik\HotelsConnector\Element\MealIds();
    $removeMeals->addMeal(2); // id услуги питания 
    $updateService->setAddMeals($addMeals); // Добавить питание в услугу
    $updateService->setRemoveMeals($removeMeals); // Удалить питание из услуги 
    $updateService->setCheckinHour(15); // Коррекция часа заезда
    $updateService->setCheckoutHour(21); // Коррекция часа выезда
    $updateService->setComment('Комментарий'); // Коррекция комментария к услуге
    
    $response = $connector->getServicePricingRequest($serviceId, $updateService);
```
Запрос для коррекции цены продажи:

```php
<?php
    $serviceId = 1; // Id услуги
    $updateService = new \Bronevik\HotelsConnector\Element\UpdateService();
    $updateService->setSellingPrice(100); // Цена продажи
    
    $response = $connector->updateService($serviceId, $updateService);
```

Разбор результатов:

```php
<?php
/** @var \Bronevik\HotelsConnector\Element\GetServicePricingResponse $response */
$order = $response->getOrder();
$order->getId();            // Id заказа
$order->getComment();       // Комментарий к заказу, который был указан при создании
$order->getContactPerson(); // Контактное лицо
$order->getContactPhone();  // Контактный телефон
$order->getContactEmail();  // Контактный email

/** @var Bronevik\HotelsConnector\Element\OrderServiceAccommodation $service */
foreach ($order->getServices()->service as $service) {
    $service->getId();               // Id услуги
    $service->getDate();             // Дата создания услуги
    $service->getComment();          // Комментарий к услуге, который был указан при создании
    $service->getPaymentRecipient(); // Способ оплаты, возможные значения: \Bronevik\HotelsConnector\Enum\PaymentRecipients
    $service->getIsBlockRoom();      // Блочный ли номер?
    $service->getIsSharedRoom();     // Является ли номер номером с подселением?
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
    $service->getVATPercent();       // Ставка НДС
    $service->getGuaranteeType();    // Тип гарантии
    $service->getGuests();           // Гости услуги
    $service->getPaymentTerms()      // Условия оплаты
   
    // информация о тарифе
    /** @var Bronevik\HotelsConnector\Element\RateType $rateType */
    $rateType = $service->getRateType();
    /**
     * Название тарифа
     * @see \Bronevik\HotelsConnector\Enum\RateTypeNames
     */
    $rateType->getRateName();
    $rateType->getRateDescription(); // Описание тарифа

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
        /** @var Bronevik\HotelsConnector\Element\Guest $guest */
        echo $guest->getLastName() . ' ' . $guest->getFirstName();
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

#### Получение доступности коррекции для услуг

Запрос:

```php
<?php
$serviceIds = [];
$availableCorrectionTypes = new Bronevik\HotelsConnector\Element\AvailableCorrectionTypes();
$availableCorrectionTypes->addCorrectionType(\Bronevik\HotelsConnector\Enum\CorrectionTypes::MEALS);
$response = $connector->getServiceAvailableCorrection($serviceIds, $availableCorrectionTypes);
```

Разбор результатов:

```php
<?php
 /** @var Bronevik\HotelsConnector\Element\GetServiceAvailableCorrectionsResponse $response */
    $editService = $response->getEditService();
    $editService->getServiceId(); // Id услуги
    
    $arrivalDepartureDate = $editService->getArrivalDepartureDates(); // Информация о коррекции дат заезда/выезда
    $arrivalDepartureDate->getArrivalDate(); // Дата заезда
    $departureDate = $arrivalDepartureDate->getDepartureDate(); // Дата выезда
    $departureDate->getMaxAvailableDate(); // Максимально доступная дата для коррекции 
    $departureDate->getMinAvailableDate(); // Минимально доступная дата для коррекции 

    /** @var Bronevik\HotelsConnector\Element\AvailableMeals $meals */
    $meals = $editService->getMeals(); // Доступность питания
    
    /** @var Bronevik\HotelsConnector\Element\AvailableMeal $meal */
    foreach($meals->meal as $meal) {
        $meal->getId(); // Идентификатор услуги питания
        $meal->getIncluded(); // Включена ли услуга в предложение
        $meal->getVATPercent(); // Детализация услуги питания
        $meal->getPriceDetails(); // Ставка НДС
    }
    
    
    $meals->getCorrectionAvailability()->isAdding(); // Доступно ли добавление услуг питания
    $meals->getCorrectionAvailability()->isRemoving(); // Доступно ли удаление услуг питания
    
    $checkinCheckoutPrice = $editService->getCheckinCheckoutPrices(); // Цены и доступность РЗПВ
    $checkin = $checkinCheckoutPrice->getCheckin(); // Информация о раннем заезде
    $checkout = $checkinCheckoutPrice->getCheckout(); // Информация о позднем выезде
    
    $hoursPrice = $checkin->getHourPrice(); // Массив с ценами по часам.
    /** @var Bronevik\HotelsConnector\Element\OfferHourPrice $hourPrice */
    foreach($hoursPrice as $hourPrice)
    {
        $hourPrice->getHour(); // Час
        $hourPrice->getAvailabilityCode(); // Код доступности.
        $hourPrice->getPriceDetails(); //  Детализация часа.
    }
    
    $correctionAvailability = $editService->getCorrectionAvailability(); // Информация о доступности коррекции
    $correctionAvailability->getAvailableCorrectionNumber(); // Доступное количество коррекций
    $correctionAvailability->getIsCorrectionAvailable(); // Доступна ли коррекция услуги
    $correctionAvailability->getMeals(); // Доступна ли коррекция питания
    $correctionAvailability->getCheckinHour(); // Доступна ли коррекция часов заезда
    $correctionAvailability->getCheckoutHour(); // Доступна ли коррекция часов выезда
    $correctionAvailability->getArrivalDate(); // Доступна ли коррекция даты заезда
    $correctionAvailability->getDepartureDate(); // Доступна ли коррекция даты выезда
    $correctionAvailability->getSellingPrice(); // Доступна ли коррекция свайп шкалы
    $correctionAvailability->getComment(); // Доступна ли коррекция комментария
    $correctionAvailability->getGuests(); // Доступна ли коррекция гостей
    $correctionAvailability->getReferenceId(); // Доступна ли коррекция referenceId

```

#### Получение счетов заказа

Запрос:

```php
<?php

$orderId = 1; // id Заказа
$orderInvoices = $connector->getOrderInvoices($orderId);
```

Разбор результата:

```php
/** @var Bronevik\HotelsConnector\Element\OrderInvoices $invoice */ 
$orderInvoices->getId(); // id Заказа
$invoices = $orderInvoices->getInvoices(); // Счета заказа

/** @var Bronevik\HotelsConnector\Element\Invoice $invoice */
foreach($invoices as $invoice) {
   $invoice->getInvoiceLink(); // Временная ссылка для скачивания счета
   $invoiceInfo = $invoice->getInvoiceInfo(); // Информация о счете
   
    /** @var Bronevik\HotelsConnector\Element\Info $info */
    foreach($invoiceInfo->getInfo() as $info)
    {
        $info->getName(); //  Название параметра
        $info->getValue(); // Значение параметра
    }
}

```


#### Получение списка стран

Запрос:

```php
<?php

/** @var Bronevik\HotelsConnector\Element\Countries $countries */
$countries = $connector->getCountries();
```
Разбор результата:
```php
<?php

/** @var Bronevik\HotelsConnector\Element\Countries $countries */
foreach ($countries as $country) {
    $country->getId();   // 1
    $country->getName(); // Россия

    /** @var Bronevik\HotelsConnector\Element\CountryCodes $codes */
    $codes = $country->getCodes();
    
    $codes->getAlpha2(); // RU
    $codes->getAlpha3(); // RUS
}
```

#### Получение списка городов

В метод `getCities()` нужно передать Id страны или Id городов.

```php
<?php

$cityIds = new \Bronevik\HotelsConnector\Element\CityIds(); // $cityIds может быть null
$cityIds->add(1);

/** @var Bronevik\HotelsConnector\Element\Cities $cities */
$cities = $connector->getCities(1, $cityIds);
```
Разбор результата:
```php
<?php

/** @var Bronevik\HotelsConnector\Element\Cities $cities */
foreach ($cities->city as $city) {
    $city->getId();         // 539
    $city->getName();       // Абаза
    $city->getRegionId();   // 102
    $city->getRegionName(); // Хакасия
    $city->getLatitude();   // 52.6439447
    $city->getLongitude();  // 90.1039492
    $city->getCountryId();  // 1
    $city->getCountryName() // Россия
}
```

#### Получение списка удобств

Запрос:
```php
<?php

/** @var Bronevik\HotelsConnector\Element\Amenities $amenities */
$amenities = $connector->getAmenities();
```
Разбор результата:
```php
<?php

/** @var Bronevik\HotelsConnector\Element\Amenities $amenities */
foreach ($amenities->amenity as $amenity) {
    $amenity->getId();        // 5
    $amenity->getName();      // Трансфер
    $amenity->getGroupName(); // Общие услуги отеля
}
```

#### Получение списка питания
```php
<?php

/** @var Bronevik\HotelsConnector\Element\Meals $meals */
$meals = $connector->getMeals();
```
Разбор результата:
```php
<?php

/** @var Bronevik\HotelsConnector\Element\Meals $meals */
foreach ($meals->meal as $meal) {
    $meal->getId();   // 2
    $meal->getName(); // Завтрак континентальный
}
```

### Поиск предложений отелей

#### Простой запрос

```php
<?php
$currency = \Bronevik\HotelsConnector\Enum\CurrencyCodes::RUB
/** @var Bronevik\HotelsConnector\Element\Hotels $hotelsWithOffers */
$hotelsWithOffers = $connector->searchHotelOffers(
    '2016-01-22', // дата заезда
    '2016-01-24', // дата выезда,
    $currency,    // Валюта
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

$currency = \Bronevik\HotelsConnector\Enum\CurrencyCodes::RUB

/** @var Bronevik\HotelsConnector\Element\Hotels $hotelsWithOffers */
$hotelsWithOffers = $connector->searchHotelOffers(
    '2016-01-22', // дата заезда
    '2016-01-24', // дата выезда
    $currency,    // Валюта 
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
$currency = \Bronevik\HotelsConnector\Enum\CurrencyCodes::RUB

/** @var Bronevik\HotelsConnector\Element\Hotels $hotelsWithOffers */
$hotelsWithOffers = $connector->searchHotelOffers(
    '2016-01-22', // дата заезда
    '2016-01-24', // дата выезда
    $currency,    // Валюта
    null,         // Id города
    [],           // массив фильтров
    $hotelIds     // ids отелей
);
```

#### Поиск предложений по геокоординатам и радиусу

```php
<?php

$latitude  = 30.1234; // широта
$longitude = 30.1234; // долгота
$radius    = 12.1;    // радиус в км (от 0 до 30 км, точность до 1 десятой)

$geolocation = new Bronevik\HotelsConnector\Element\GeoLocation();

$geolocation->latitude  = $latitude;
$geolocation->longitude = $longitude;
$geolocation->radius    = $radius;

$currency = \Bronevik\HotelsConnector\Enum\CurrencyCodes::RUB

/** @var Bronevik\HotelsConnector\Element\Hotels $hotelsWithOffers */
$hotelsWithOffers = $connector->searchHotelOffers(
    '2016-01-22', // дата заезда
    '2016-01-24', // дата выезда
    $currency,    // Валюта  
    null,         // Id города
    [],           // массив фильтров
    [],           // ids отелей
    [],           // skipElements
    $geolocation
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
$currency = \Bronevik\HotelsConnector\Enum\CurrencyCodes::RUB;

/** @var Bronevik\HotelsConnector\Element\Hotels $hotelsWithOffers */
$hotelsWithOffers = $connector->searchHotelOffers(
    '2016-01-22', // дата заезда
    '2016-01-24', // дата выезда
    $currency,    // Валюта
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
    $hotelWithOffers->getVatApplicable();      // Применим ли к отелю НДС? (например, true)
    $hotelWithOffers->getVatIncluded();        // Включен ли НДС? (например, true)
    $hotelWithOffers->getVATPercent();         // Процент НДС (например, 20)
    $hotelWithOffers->getHasTaxes();           // Наличие в отеле дополнительных сборов (например, false)
    $hotelWithOffers->getType();               // Тип отеля (например, hotel)

    // Информация для гостя
    $informationForGuest = $hotelWithOffers->getInformationForGuest();


    $allowableCheckinTime = $hotelWithOffers->getAllowableCheckinTime(); // Допустимое время заезда.
    $allowableCheckinTime->getTimeFrom(); // Начальное время.
    $allowableCheckinTime->getTimeTo(); // Конечное время.
    
    $allowableCheckoutTime = $hotelWithOffers->getAllowableCheckoutTime(); // Допустимое время выезда.
    $allowableCheckoutTime->getTimeFrom(); // Начальное время
    $allowableCheckoutTime->getTimeTo(); // Конечное время
    
    
    // уведомления для гостя
    foreach ($informationForGuest->getNotification() as $notification) {
        $notification->getType();  // тип уведомления
        $notification->getValue(); // текст уведомления
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
    $descriptionDetails->getZipCode();          // Почтовый адрес отеля

	// Фотографии отеля
	/** @var Bronevik\HotelsConnector\Element\Image $photo */
    foreach ($descriptionDetails->getPhotos()->photo as $photo) {
        $photo->getGuid(); // 73c7c9b97a36ac0d970990937d842417
        $photo->getUrl();  // //dev.bronevik.tech/static/photo/g/250x250a/73c7c9b97a36ac0d970990937d842417
    }

    /** @var Bronevik\HotelsConnector\Element\AvailableAmenity $amenity */
    foreach ($descriptionDetails->getAvailableAmenities()->availableAmenity as $amenity) {
        $amenity->getId(); // 1
        $amenity->getIncluded(); // false
        $amenity->getPrice(); // 125.00 
        $amenity->getCurrency()// Валюта - RUB
    }

    // предложения
    $offers = $hotelWithOffers->getOffers();

	/** @var Bronevik\HotelsConnector\Element\HotelOffer $offer */
    foreach ($offers->getOffer() as $offer) {
        $offer->getCode();                  // Код предложения (например, T1I3MTYjI2RvdWJsZSMxMDY0IzIwMTYtMDEtMjIjMjAxNi0wMS0yNCMyLDE=)
        $offer->getName();                  // Название предложения (например, Люкс)
        $offer->getNonRefundable();         // Является ли предложение невозвратным (например, false)
        $offer->getCurrency();              // Валюта оплаты (например, RUB)
        $offer->getImmediateConfirmation(); // Возможно ли немедленное подтверждение (например, true)
        $offer->getFreeRooms();             // Количество свободных номеров (например, 5)
        $offer->getRoomId();                // Id номера (например, 24)
        $offer->getRoomType();              // Тип размещения (например, single)
        $offer->getIsSharedRoom();          // Является ли номер номером с подселением (например, false)
        $offer->getIsBlockRoom();           // Является ли номер блочным (например, false)
        $offer->getPaymentRecipient();      // Способ оплаты (например, \Bronevik\HotelsConnector\Enum\PaymentRecipients::AGENCY)
        $offer->getDeepLink();              // ​Элемент для работы метапоисковых систем (например, http://dev.bronevik.tech/ru/hotel/russia/yekaterinburg/oktyabrskaya?sd=2019-06-01&ed=2019-06-02&code=T1I3MTYjOTgxNSNzaW5nbGUjMjQjMjAxOS0wNi0wMSMyMDE5LTA2LTAyIzIjMA==&currency=RUB&spk=Corteos)
        $offer->getRoomWithWindow();        // Наличие окна в номере (например, true)
        $offer->getGuaranteeType();         // Тип гарантии

        // информация о тарифе
        /** @var Bronevik\HotelsConnector\Element\RateType $rateType */
        $rateType = $offer->getRateType();
        $rateType->getRateName();        // Название тарифа
        $rateType->getRateDescription(); // Описание тарифа

        /**
          * Детализация стоимости 
          * 
          * @var Bronevik\HotelsConnector\Element\PriceDetails $priceDetails
          */
        $priceDetails = $offer->getPriceDetails();
        $priceDetails->getVatApplicable();              // Применим ли к отелю НДС
        $clientDetails    = $priceDetails->getClient(); // Детализация клиентской стоимости
        $hotelDetails     = $priceDetails->getHotel();  // Детализация отельной стоимости
        $additionalPrices = $clientDetails->getClientCurrency()->getExtra()  // Дополнительные цены

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
        foreach ($offer->getTaxes()->taxes as $tax) {
            $tax->getCurrency(); // Валюта оплаты
            $tax->getComment();  // Комментарий
            $tax->getType();     // Тип сбора
            $tax->getAmount();   // Величина сбора
            $tax->getIncluded(); // Включен ли сбор в стоимость предложения
        }

    	/** @var Bronevik\HotelsConnector\Element\HotelOfferCancellationPolicy $cancellationPolicy */
    	// политика аннуляции
        foreach ($offer->getCancellationPolicies() as $cancellationPolicy) {
            $cancellationPolicy->getPenaltyDateTime();     // Дата наступления штрафа
            $cancellationPolicy->getPenaltyPriceDetails(); // Детализация цен штрафа
            
            /** @var Bronevik\HotelsConnector\Element\ClientPriceDetails $cancellationPriceDetails */
            $cancellationPriceDetails = $cancellationPolicy->getPenaltyPriceDetails();

            /** @var Bronevik\HotelsConnector\Element\DetailedPrice $commission */
            $commission = $cancellationPriceDetails->getCommission();
            $commission->getPrice();     // стоимость
            $commission->getVatAmount(); // сумма НДС
            $commission->getCurrency();  // валюта

            /** @var Bronevik\HotelsConnector\Element\DetailedPrice $net */
            $net = $cancellationPriceDetails->getNet();
            $net->getPrice();     // стоимость
            $net->getVatAmount(); // сумма НДС
            $net->getCurrency();  // валюта

            /** @var Bronevik\HotelsConnector\Element\DetailedPrice $gross */
            $gross = $cancellationPriceDetails->getGross();
            $gross->getPrice();     // стоимость
            $gross->getVatAmount(); // сумма НДС
            $gross->getCurrency();  // валюта

            $cancellationPriceDetails->getVatIncluded(); // включен ли в стоимость НДС
        }

        /** @var Bronevik\HotelsConnector\Element\AvailableMeal $meal */
        // питание
        foreach ($offer->getMeals()->meal as $meal) {
            $meal->getId();         // Идентификатор услуги питания
            $meal->getIncluded();   // Включена ли услуга в предложение
            $meal->getVATPercent(); // Ставка НДС

            /** @var Bronevik\HotelsConnector\Element\ClientPriceDetails $mealPriceDetails */
            $mealPriceDetails = $meal->getPriceDetails();
            
            /** @var Bronevik\HotelsConnector\Element\DetailedPrice $commission */
            $commission = $mealPriceDetails->getCommission();
            $commission->getPrice();     // стоимость
            $commission->getVatAmount(); // сумма НДС
            $commission->getCurrency();  // валюта
            
            /** @var Bronevik\HotelsConnector\Element\DetailedPrice $net */
            $net = $mealPriceDetails->getNet();
            $net->getPrice();     // стоимость
            $net->getVatAmount(); // сумма НДС
            $net->getCurrency();  // валюта
            
            /** @var Bronevik\HotelsConnector\Element\DetailedPrice $gross */
            $gross = $mealPriceDetails->getGross();
            $gross->getPrice();     // стоимость
            $gross->getVatAmount(); // сумма НДС
            $gross->getCurrency();  // валюта

            $mealPriceDetails->getVatIncluded(); // включен ли в стоимость НДС
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
        /** @var Bronevik\HotelsConnector\Element\OfferPolicies $offerPolicy */
        $offerPolicies = $offer->getOfferPolicies();
        foreach ($offerPolicies->getPolicy() as $policy) {
            $policy->getType();
            $policy->getValue();
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
$hotelsWithInfo = $connector->getHotelInfo([716, 901]); //Получить по Id отелей

$cityIds = [1, 2, 3];
$hotelsWithInfo = $connector->getHotelInfoByCityIds($cityIds); //Получить по Id городов
```

Ответ:

```php
<?php

/** @var Bronevik\HotelsConnector\Element\HotelWithInfo[] $hotelsWithInfo */
foreach ($hotelsWithInfo as $hotelWithInfo) {
    // Сертификат, подтверждающий звездность отеля.
    /** @var Bronevik\HotelsConnector\Element\CategoryCertificate $categoryCertificate */
    $categoryCertificate = $hotelWithInfo->getCategoryCertificate();

    $categoryCertificate->getNumber();  // Номер сертификата
    $categoryCertificate->getEndDate(); // Дата истечения сертификата

    /** @var Bronevik\HotelsConnector\Element\HotelRoom $hotelRoom */
    foreach ($hotelWithInfo->getRooms()->room as $hotelRoom) {
        $hotelRoom->getId();            // Id номера
        $hotelRoom->getName();          // Название номера
        $hotelRoom->getDescription();   // Описание номера
        $hotelRoom->getSize();          // Площадь номера
        $hotelRoom->getWithWindow();    // Есть ли окно в номере
        $hotelRoom->getBuildingPart();  // Часть здания, в которой расположен номер
        $hotelRoom->getBedroomAmount(); // Кол-во комнат в номере

        // Удобства в номере
        /** @var Bronevik\HotelsConnector\Element\AvailableAmenity $availableAmenity */
        foreach ($hotelRoom->getAvailableAmenities()->availableAmenity as $availableAmenity) {
            $availableAmenity->getId();
            $availableAmenity->getPrice();
            $availableAmenity->getIncluded();
            $availableAmenity->getCurrency();
        }

        // Фотограции номера
        /** @var Bronevik\HotelsConnector\Element\Image $photo */
        foreach ($hotelRoom->getPhotos()->photo as $photo) {
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

        /** @var Bronevik\HotelsConnector\Element\WindowViews $windowViews */
        $windowViews = $hotelRoom->getWindowViews();
        // Массив видов из окна

        foreach ($windowViews->getName() as $windowViewName) {
            // название вида из номера
            echo $windowViewName;
        }
    }
}
```

### Заказ бронирования проживания и операции с заказами

#### Создание заказа

Заказ бронирования осуществляется на основе предложения `\Bronevik\HotelsConnector\Element\HotelOffer`. На каждый
бронируемый номер необходимо создать объект услуги проживания (`$accomodation`). Все объекты услуг добавляются в заказ.

В этом примере заказывается бронирование двух номеров для четырёх человек:

```php
<?php
// Создание запроса на бронирование номеров
$orderRequest = new Bronevik\HotelsConnector\Element\CreateOrderRequest();
$orderRequest->setCurrency(\Bronevik\HotelsConnector\Enum\CurrencyCodes::RUB);
$orderRequest->setContactPerson('Григорий');
$orderRequest->setContactEmail('grigoriy@example.com');
$orderRequest->setContactPhone('+79991234567');
$orderRequest->setComment('Гости приедут в районе 18 часов.');

// Создание услуг проживания и привязка их к заказу.
$accommodation = new Bronevik\HotelsConnector\Element\ServiceAccommodation;
$accommodation->setOfferCode('T1I3MTYjI2RvdWJsZSMxMDY0IzIwMTYtMDEtMjIjMjAxNi0wMS0yNCMyLDE=');
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
$accommodation->setOfferCode('T1I3MTYjI2RvdWJsZSMxMDY0IzIwMTYtMDEtMjIjMjAxNi0wMS0yNCMyLDE=');
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
foreach ($order->getServices()->service as $service) {
    $service->getId();               // Id услуги
    $service->getDate();             // Дата создания услуги
    $service->getComment();          // Комментарий к услуге, который был указан при создании
    $service->getPaymentRecipient(); // Способ оплаты, возможные значения: \Bronevik\HotelsConnector\Enum\PaymentRecipients
    $service->getIsBlockRoom();      // Блочный ли номер?
    $service->getIsSharedRoom();     // Является ли номер номером с подселением?
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
    $service->getVATPercent();       // Ставка НДС
    $service->getGuaranteeType();    // Тип гарантии
    $service->getGuests();           // Гости услуги
    $service->getPaymentTerms()      // Условия оплаты
   
    // информация о тарифе
    /** @var Bronevik\HotelsConnector\Element\RateType $rateType */
    $rateType = $service->getRateType();
    /**
     * Название тарифа
     * @see \Bronevik\HotelsConnector\Enum\RateTypeNames
     */
    $rateType->getRateName();
    $rateType->getRateDescription(); // Описание тарифа

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
    foreach ($service->getGuests()->guest as $guest) {
        /** @var Bronevik\HotelsConnector\Element\Guest $guest */
        echo $guest->getLastName() . ' ' . $guest->getFirstName();
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

#### Создание заказа с данными банковской карты

Запрос:

```php
<?php
// Создание запроса на бронирование номеров
$orderRequest = new Bronevik\HotelsConnector\Element\CreateOrderWithCardDetailsRequest();
$orderRequest->setCurrency(\Bronevik\HotelsConnector\Enum\CurrencyCodes::RUB) //Валюта

// Заполнение данных банковской карты
$orderRequest->guestInfo = new Bronevik\HotelsConnector\Element\GuestInfo();
$orderRequest->guestInfo->cardDetails = new Bronevik\HotelsConnector\Element\CardDetails();
$orderRequest->guestInfo->cardDetails->pan             = '1234123412341234'; // Номер карты
$orderRequest->guestInfo->cardDetails->cardholder      = 'IVANOV IVAN';      // Владелец карты
$orderRequest->guestInfo->cardDetails->expirationMonth = '01';               // Месяц истечения карты
$orderRequest->guestInfo->cardDetails->expirationYear  = '20';               // Год истечения карты
$orderRequest->guestInfo->cardDetails->CVV             = '123';              // CVV/CVC

// Заполнение информации о госте
$orderRequest->guestInfo->contacts = new Bronevik\HotelsConnector\Element\GuestContacts();
$orderRequest->guestInfo->contacts->email = 'guest@email.com'; // email гостя
$orderRequest->guestInfo->contacts->phone = '+79999999999';    // контактный телефон гостя

$orderRequest->setContactPerson('Григорий');
$orderRequest->setContactEmail('grigoriy@example.com');
$orderRequest->setContactPhone('+79991234567');
$orderRequest->setComment('Гости приедут в районе 18 часов.');

// Создание услуг проживания и привязка их к заказу.
$accommodation = new Bronevik\HotelsConnector\Element\ServiceAccommodation;
$accommodation->setOfferCode('T1I3MTYjI2RvdWJsZSMxMDY0IzIwMTYtMDEtMjIjMjAxNi0wMS0yNCMyLDE=');
$accommodation->setComment('Гостям потребуется высокоскоростное подключение к Интернет.');
$guest = new Bronevik\HotelsConnector\Element\Guest();
$guest->setFirstName('Спанч');
$guest->setLastName('Боб');
$accommodation->guests->add($guest);
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
$accommodation->setOfferCode('T1I3MTYjI2RvdWJsZSMxMDY0IzIwMTYtMDEtMjIjMjAxNi0wMS0yNCMyLDE=');
$accommodation->setComment('Не представлять напитки из минибара.');

$guestNikolay = new \Bronevik\HotelsConnector\Element\Guest();
$guestNikolay->setFirstName('Николай');
$guestNikolay->setLastName('Петрович');

$guestEldar = new \Bronevik\HotelsConnector\Element\Guest();
$guestEldar->setFirstName('Эльдар');
$guestEldar->setLastName('Джарахов');
$accommodation->guests->add($guestNikolay);
$accommodation->guests->add($guestEldar);
$orderRequest->addServices($accommodation);

// Отправка заказа
/** @var Bronevik\HotelsConnector\Element\Order $order */
$order = $connector->createOrderWithCardDetails($orderRequest);
```

Результат возвращается такой же, как и для обычного создания заказа (CreateOrder).

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

// поиск по типам гарантии
$criterion = new Bronevik\HotelsConnector\Element\SearchOfferCriterionGuaranteeTypes();
$criterion->addGuaranteeType(Bronevik\HotelsConnector\Enum\GuaranteeTypes::CLIENT_CONTRACT);
$criterion->addGuaranteeType(Bronevik\HotelsConnector\Enum\GuaranteeTypes::CONSUMER_CARD_WITH_CVV);
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
$changelogRecords = $connector->getOrdersChangelog()->getOrdersChangelogRecord();

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
$status = $connector->removeOrdersChangelogRecords($ids);

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
$guest = new \Bronevik\HotelsConnector\Element\Guest();
$guest->setFirstName('Валентин');
$guest->setLastName('Валентинович');

$accommodation->guests->add($guest);

$services[] = $accommodation;

// Нужно создавать по услуге на каждый бронируемый номер.
$accommodation = new Bronevik\HotelsConnector\Element\ServiceAccommodation;
$accommodation->setOfferCode('offer-code');
$accommodation->setComment('Не представлять напитки из минибара.');
$accommodation->guests->add($guest);
$services[] = $accommodation;

$currency = \Bronevik\HotelsConnector\Enum\CurrencyCodes::RUB; // Валюта 
/** @var Bronevik\HotelsConnector\Element\OrderServiceAccommodation[] $orderServices */
$orderServices = $connector->getHotelOfferPricing($services, $currency);

// объект услуги в ответе точно такой же как и при создании заказа
```

#### Обновление referenceId услуги

Для обновления услуги нужно воспользоваться методом updateService, который принимает на вход идентификатор услуги и referenceId.
```php
<?php

$serviceId   = 123;           // идентификатор услуги
$referenceId = 'referenceId'; // идентификатор услуги в системе клиента

$response = $connector->updateService($serviceId, $referenceId);

$response->getReferenceId(); // Обновленный referenceId
$response->getResult();      // результат обновления referenceId (true или false)
```

#### Аннуляция услуг

Для аннуляции услуг нужно воспользоваться методом cancelServices, который принимает на вход массив идентификаторов услуг.
```php
<?php

$serviceIds = [123 ,234]; // идентификаторы услуг

/** @var Bronevik\HotelsConnector\Element\CancelledService[] $cancelledServices */
$cancelledServices = $connector->cancelServices($serviceIds);

foreach ($cancelledServices as $cancelledService) {
/** @var Bronevik\HotelsConnector\Element\CancelledService $cancelledService */
    $cancelledService->getId();     // идентификатор услуги
    $cancelledService->getStatus(); // статус услуги (Описание статусов есть в документации)
    $cancelledService->getResult(); // результат аннуляции услуги
}
```

#### Безрейтовый поиск

##### Поиск по городу

```php
<?php

$checkinDate  = '2019-08-01'; // дата заезда
$checkoutDate = '2019-08-02'; // дата выезда
$cityId       = 1;            // идентификатор города

/** @var Bronevik\HotelsConnector\Element\HotelWithCheapestOffer[] $hotelsWithCheapestOffers */
$hotelsWithCheapestOffers = $connector->searchHotelAvailability(
    $checkinDate,
    $checkoutDate,
    \Bronevik\HotelsConnector\Enum\CurrencyCodes::RUB,
    $cityId
);
```

##### Поиск по отелям

```php
<?php

$checkinDate  = '2019-08-01'; // дата заезда
$checkoutDate = '2019-08-02'; // дата выезда
$hotelIds     = [1, 2, 3];    // идентификаторы отелей (до 100 шт)

/** @var Bronevik\HotelsConnector\Element\HotelWithCheapestOffer[] $hotelsWithCheapestOffers */
$hotelsWithCheapestOffers = $connector->searchHotelAvailability(
    $checkinDate,
    $checkoutDate,
    \Bronevik\HotelsConnector\Enum\CurrencyCodes::RUB,
    null,
    $hotelIds
);
```

##### Поиск по координатам и радиусу

```php
<?php

$latitude  = 30.1234; // широта
$longitude = 30.1234; // долгота
$radius    = 12.1;    // радиус в км (от 0 до 30 км, точность до 1 десятой)

$geolocation = new Bronevik\HotelsConnector\Element\GeoLocation();

$geolocation->latitude  = $latitude;
$geolocation->longitude = $longitude;
$geolocation->radius    = $radius;

$checkinDate  = '2019-08-01'; // дата заезда
$checkoutDate = '2019-08-02'; // дата выезда

/** @var Bronevik\HotelsConnector\Element\HotelWithCheapestOffer[] $hotelsWithCheapestOffers */
$hotelsWithCheapestOffers = $connector->searchHotelAvailability(
    $checkinDate,
    $checkoutDate,
    \Bronevik\HotelsConnector\Enum\CurrencyCodes::RUB,
    null,
    [],
    $geolocation
);
```

##### Поиск с критериями

```php
<?php

$checkinDate  = '2019-08-01'; // дата заезда
$checkoutDate = '2019-08-02'; // дата выезда
$cityId       = 1;            // идентификатор города
$criteria     = [];           // массив критериев

$criteria[] = new Bronevik\HotelsConnector\Element\SearchOfferCriterionOnlyOnline();
/**
 * Более подробную информацию о критериях смотрите в методе searchHotelOffers
 */

/** @var Bronevik\HotelsConnector\Element\HotelWithCheapestOffer[] $hotelsWithCheapestOffers */
$hotelsWithCheapestOffers = $connector->searchHotelAvailability(
    $checkinDate,
    $checkoutDate,
    \Bronevik\HotelsConnector\Enum\CurrencyCodes::RUB,
    $cityId,
    [],
    null,
    [],
    $criteria
);
```

##### Управление содержимым ответа поиска

```php
<?php

$checkinDate  = '2019-08-01'; // дата заезда
$checkoutDate = '2019-08-02'; // дата выезда
$cityId       = 1;            // идентификатор города
$addElements  = [];           // массив с названиями нужных элементов
/**
 * Все названия элементов содержатся в классе
 * @see \Bronevik\HotelsConnector\Enum\AddElementsTypes
 */

$addElements[] = Bronevik\HotelsConnector\Enum\AddElementsTypes::HOTEL_AMENITIES;
$addElements[] = Bronevik\HotelsConnector\Enum\AddElementsTypes::GEO;

/** @var Bronevik\HotelsConnector\Element\HotelWithCheapestOffer[] $hotelsWithCheapestOffers */
$hotelsWithCheapestOffers = $connector->searchHotelAvailability(
    $checkinDate,
    $checkoutDate,
    \Bronevik\HotelsConnector\Enum\CurrencyCodes::RUB,
    $cityId,
    [],
    null,
    $addElements
);
```

##### Ответ безрейтового поиска

```php
<?php

$checkinDate  = '2019-08-01'; // дата заезда
$checkoutDate = '2019-08-02'; // дата выезда
$cityId       = 1;            // идентификатор города

/** @var Bronevik\HotelsConnector\Element\HotelWithCheapestOffer[] $hotelsWithCheapestOffers */
$hotelsWithCheapestOffers = $connector->searchHotelAvailability(
    $checkinDate,
    $checkoutDate,
    \Bronevik\HotelsConnector\Enum\CurrencyCodes::RUB,
    $cityId
);

foreach ($hotelsWithCheapestOffers as $hotelWithCheapestOffer) {
    $hotelWithCheapestOffer->getId();        // идентификатор отеля

    /**
      * Детализация стоимости 
      * 
      * @var Bronevik\HotelsConnector\Element\PriceDetails $priceDetails
      */
    $priceDetails = $hotelWithCheapestOffer->getMinimalPriceDetails();
    $priceDetails->getVatApplicable();              // Применим ли к отелю НДС
    $clientDetails    = $priceDetails->getClient(); // Детализация клиентской стоимости
    $hotelDetails     = $priceDetails->getHotel();  // Детализация отельной стоимости
    $additionalPrices = $priceDetails->getExtra();  // Дополнительные цены

    $clientDetails->getVatIncluded(); // Включен ли НДС в клиентскую стоимость
    $clientDetails->getCommission();  // Информация о комиссии
    $clientDetails->getGross();       // Брутто-стоимость
    $clientDetails->getNet();         // Нетто-стоимость

    /** @var Bronevik\HotelsConnector\Element\AvailableAmenities */
    $availableAmenities = $hotelWithCheapestOffer->getAmenities();

    /** @var Bronevik\HotelsConnector\Element\AvailableAmenity $availableAmenity */
    foreach ($availableAmenities->availableAmenity as $availableAmenity) {
        $availableAmenity->getId();
        $availableAmenity->getPrice();
        $availableAmenity->getIncluded();
        $availableAmenity->getCurrency();
    }

    /** @var Bronevik\HotelsConnector\Element\HotelGeo $geoInfo */
    $geoInfo = $hotelWithCheapestOffer->getGeo();
    
    $geoInfo->getCityId();            // идентификатор города
    $geoInfo->getCityName();          // название города
    $geoInfo->getAddress();           // адрес отеля
    $geoInfo->getDistanceToCenter();  // расстояние до центра города

    /** @var Bronevik\HotelsConnector\Element\Coordinates $coordinates */
    $coordinates = $geoInfo->getCoordinates();
    
    $coordinates->getLatitude();  // широта
    $coordinates->getLongitude(); // долгота

    /** @var Bronevik\HotelsConnector\Element\HotelInfo $hotelInfo */
    $hotelInfo = $hotelWithCheapestOffer->getInfo();

    $hotelInfo->getName();        // название отеля
    $hotelInfo->getDescription(); // описание отеля
    $hotelInfo->getType();        // тип отеля
    $hotelInfo->getCategory();    // категория отеля
    $hotelInfo->getDeepLink();    // элемент для работы метапоисковых систем

    /** @var Bronevik\HotelsConnector\Element\Image $hotelPhoto */
    $hotelPhoto = $hotelInfo->getPhoto();       // главная фотография отеля

    /** @var Bronevik\HotelsConnector\Element\HotelVatInfo $hotelVatInfo */
    $hotelVatInfo = $hotelWithCheapestOffer->getVat();

    $hotelVatInfo->getIncluded();   // включен ли НДС в отеле
    $hotelVatInfo->getApplicable(); // применим ли НДС к отелю
    $hotelVatInfo->getPercent();    // процент НДС

    /** @var Bronevik\HotelsConnector\Element\SearchAvailabilityHotelOffer $hotelOffer */
    $hotelOffer = $hotelWithCheapestOffer->getOffer();

    /** @var Bronevik\HotelsConnector\Element\Image $roomPhoto */
    $roomPhoto = $hotelOffer->getPhoto();     // главная фотография отеля

    /** @var Bronevik\HotelsConnector\Element\AvailableAmenities $roomAmenities */
    $roomAmenities = $hotelOffer->getAmenities();

    $hotelOffer->getRoomId();           // идентификатор номера
    $hotelOffer->getName();             // название номера
    $hotelOffer->getRoomType();         // тип номера
    $hotelOffer->getFreeRooms();        // кол-во свободных номеров
    $hotelOffer->getIsBlockRoom();      // номер блочный?
    $hotelOffer->getIsSharedRoom();     // номер с подселением?
    $hotelOffer->getPaymentRecipient(); // способ оплаты
    $hotelOffer->getNonRefundable();    // невозвратный ли тариф?

    /** @var Bronevik\HotelsConnector\Element\AvailableMeals $meals */
    $meals = $hotelOffer->getMeals();

    /** @var Bronevik\HotelsConnector\Element\HotelOfferCancellationPolicy[] $cancellationPolicies */
    $cancellationPolicies = $hotelOffer->getCancellationPolicies();
}
```

#### Запрос цен за РЗПВ

Для запроса цен раннего заезда и позднего выезда нужно воспользоваться методом getCheckinCheckoutPricing. Он принимает на вход массив оффер-кодов.
```php
<?php
$offerCodes = [
    'offerCode1',
    'offerCode2',
];

$currency = \Bronevik\HotelsConnector\Enum\CurrencyCodes::RUB;
/** @var Bronevik\HotelsConnector\Element\OfferCheckinCheckoutPrices[] $offerCheckinCheckoutPrices */
$offerCheckinCheckoutPrices = $connector->getCheckinCheckoutPricing($offerCodes, $currency);

/** @var Bronevik\HotelsConnector\Element\OfferCheckinCheckoutPrices $offerCheckinCheckoutPrice */
foreach ($offerCheckinCheckoutPrices as $offerCheckinCheckoutPrice) {
    $offerCheckinCheckoutPrice->getOfferCode(); // оффер-код, для которого рассчитывается РЗПВ
    
    /** @var Bronevik\HotelsConnector\Element\OfferHourPrices $earlyArrival */
    $earlyArrival = $offerCheckinCheckoutPrice->getCheckin();

    /** @var Bronevik\HotelsConnector\Element\OfferHourPrices $lateDeparture */
    $lateDeparture = $offerCheckinCheckoutPrice->getOfferCode();
    
    foreach ($earlyArrival->hourPrice as $offerHourPrice) {
        $offerHourPrice->getHour();             // час
        $offerHourPrice->getAvailabilityCode(); // код доступности (Описание кодов доступно в документации)
        /** 
         * @see \Bronevik\HotelsConnector\Enum\AvailabilityCodes
         */

        // детализация часа заезда
        /** @var Bronevik\HotelsConnector\Element\PriceDetails $hourPriceDetails */
        $hourPriceDetails = $offerHourPrice->getPriceDetails();
    }
}
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
    /**
     * @see \Bronevik\HotelsConnector\Enum\ExceptionCodes 
     */
}
```
