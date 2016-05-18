<?php

namespace Bronevik\HotelsConnector;

class OrderTest extends TestCase
{
    public function testOrderCreationAndCancellation()
    {
        // Получение предложений для двоих от случайного отеля
        $criteria = [];

        $criterion = new \Bronevik\HotelsConnector\Element\SearchOfferCriterionHotelCategory;
        $criterion->addCategory(4);
        $criteria[] = $criterion;

        $criterion = new \Bronevik\HotelsConnector\Element\SearchOfferCriterionNumberOfGuests();
        $criterion->setAdults(2);
        $criteria[] = $criterion;

        $criterion  = new \Bronevik\HotelsConnector\Element\SearchOfferCriterionOnlyOnline;
        $criteria[] = $criterion;

        $hotels = $this->findHotels($criteria);


        // Перебор всех предложений до первого подходящего
        /** @var null|\Bronevik\HotelsConnector\Element\HotelOffer $offer */
        $offer = null;
        foreach ($hotels as $hotel) {
            foreach ($hotel->getOffers() as $hotelOffer) {
                // Проверка предложения на наличие двух свободных номера типа twin
                if ($hotelOffer->getFreeRooms() >= 2 && $hotelOffer->getRoomType() == 'twin') {
                    $offer = $hotelOffer;
                    break;
                }
            }
        }
        $this->assertNotNull($offer, 'Внезапно нет подходящих предложений.');

        // Создание запроса на бронирование номеров
        $orderRequest = new \Bronevik\HotelsConnector\Element\CreateOrderRequest;
        $orderRequest->setComment('Гости приедут в районе 18 часов.');
        $orderRequest->setContactPerson('Григорий');
        $orderRequest->setContactEmail('grigoriy@example.com');
        $orderRequest->setContactPhone('+79991234567');

        // Создание услуг проживания и привязка их к заказу. Нужно создавать по услуге на каждый бронируемый номер.
        $accommodation = new \Bronevik\HotelsConnector\Element\ServiceAccommodation;
        $accommodation->setOfferCode($offer->getCode());
        $accommodation->addGuests('Валентин');
        $accommodation->addGuests('Андрей');
        $orderRequest->addServices($accommodation);

        // Создание услуги проживания #1
        $accommodation = new \Bronevik\HotelsConnector\Element\ServiceAccommodation;
        $accommodation->setOfferCode($offer->getCode());
        $accommodation->addGuests('Николай');
        $accommodation->addGuests('Эльдар');
        $orderRequest->addServices($accommodation);

        // Отправка заказа
        $order = $this->connector->createOrder($orderRequest);
        $this->assertNotNull($order->getId());

        // Проверка статуса услуг. Он должен быть равным 4 (подтверждён).
        foreach ($order->getServices() as $orderService) {
            $this->assertEquals(4, $orderService->getStatusId());
        }

        // Получение заказа
        $remoteOrder = $this->connector->getOrder($order->getId());
        $this->assertEquals('Гости приедут в районе 18 часов.', $remoteOrder->getComment());

        // Отмена заказа
        $cancelResult = $this->connector->cancelOrder($order->getId());
        $this->assertTrue($cancelResult);

        // Проверка статуса услуг. Он должен быть равным 7 (заказана аннуляция).
        $remoteOrder = $this->connector->getOrder($order->getId());
        foreach ($remoteOrder->getServices() as $orderService) {
            $this->assertEquals(7, $orderService->getStatusId());
        }
    }
}
