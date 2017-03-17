<?php

namespace Bronevik\HotelsConnector;

class CreateOrderTest extends TestCase
{
    /**
     * В создании заказа имя номера зависит от выбранного языка
     * 
     * @group functional
     */
    public function testCreateOrder_requestOnEnglish_roomNameOnEnglish()
    {
        // Arrange
        $this->connector->setLanguage(\Bronevik\HotelsConnector\Enum\Languages::ENGLISH);
        $offerCode = "T1IyMjAzIyN0d2luIzMyMjAjMjAxNy0wMy0xOCMyMDE3LTAzLTE5IzIsMQ==";
        
        $expectedRoomName = "Standard Twin";
        
        $request = new \Bronevik\HotelsConnector\Element\CreateOrderRequest();
        $service = new \Bronevik\HotelsConnector\Element\ServiceAccommodation();
        $service->setOfferCode($offerCode);
        
        $request->addServices(
            $service
        );
        
        // Act
        $response = $this->connector->createOrder($request);
        $actualRoomName = $response->getServices()[0]->getOfferName();
        
        // Assert
        $this->assertEquals($expectedRoomName, $actualRoomName);
    }

    /**
     * В создании заказа имя номера зависит от выбранного языка
     *
     * @group functional
     */
    public function testCreateOrder_requestOnRussian_roomNameOnRussian()
    {
        // Arrange
        $this->connector->setLanguage(\Bronevik\HotelsConnector\Enum\Languages::RUSSIAN);
        $offerCode = "T1IyMjAzIyN0d2luIzMyMjAjMjAxNy0wMy0xOCMyMDE3LTAzLTE5IzIsMQ==";

        $expectedRoomName = 'Стандарт Твин';

        $request = new \Bronevik\HotelsConnector\Element\CreateOrderRequest();
        $service = new \Bronevik\HotelsConnector\Element\ServiceAccommodation();
        $service->setOfferCode($offerCode);

        $request->addServices(
            $service
        );

        // Act
        $response       = $this->connector->createOrder($request);
        $actualRoomName = $response->getServices()[0]->getOfferName();

        // Assert
        $this->assertEquals($expectedRoomName, $actualRoomName);
    }
}