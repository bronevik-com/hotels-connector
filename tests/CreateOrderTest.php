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

    /**
     * Если в предложении есть включенная еда
     * В заказе она тоже отобразится
     *
     * @group functional
     */
    public function testCreateOrder_offerContainsIncludedMeal_responseAlsoContainsIncludedMeal()
    {
        // Arrange
        $offer = $this->findOfferWithIncludedMeal();

        $request = new \Bronevik\HotelsConnector\Element\CreateOrderRequest();
        $service = new \Bronevik\HotelsConnector\Element\ServiceAccommodation();
        $service->setOfferCode($offer->getCode());
        $service->addGuests('Test guest');

        $request->addServices(
            $service
        );

        // Act
        $response       = $this->connector->createOrder($request);
        $service = $response->getServices()[0];

        // Assert
        $this->assertTrue($service->hasMeals());
    }

    /**
     * Если мы заказали еду
     * В заказе она тоже отобразится
     *
     * @group functional
     */
    public function testCreateOrder_requestContainsOrderedMeal_responseAlsoContainsOrderedMeal()
    {
        // Arrange
        $offer = $this->findOfferWithMealAvailableToOrder();

        $request = new \Bronevik\HotelsConnector\Element\CreateOrderRequest();
        $service = new \Bronevik\HotelsConnector\Element\ServiceAccommodation();
        $service->setOfferCode($offer->getCode());
        $service->addGuests('Test guest');
        
        foreach ($offer->getMeals() as $meal) {
            if (!$meal->getIncluded()) {
                $expectedOrderedMeal = $meal;
                $service->addMeals($meal->id);
                
                break;
            }
        }

        $request->addServices(
            $service
        );

        // Act
        $response = $this->connector->createOrder($request);
        $service  = $response->getServices()[0];
        
        foreach ($service->getMeals() as $meal) {
            /* @var \Bronevik\HotelsConnector\Element\AvailableMeal $meal */
            if ( ! $meal->getIncluded()) {
                $actualOrderedMeal = $meal;
            }
        }

        // Assert
        $this->assertNotNull($expectedOrderedMeal);
        $this->assertTrue($service->hasMeals());
        $this->assertNotNull($actualOrderedMeal);
        $this->assertEquals($expectedOrderedMeal->getId(), $actualOrderedMeal->getId());
    }
}