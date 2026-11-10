<?php

namespace Bronevik\Tests\V2_6_0;

use Bronevik\HotelsConnector\Element\AdultAccommodation;
use Bronevik\HotelsConnector\Element\BaseOffer;
use Bronevik\HotelsConnector\Element\Charge;
use Bronevik\HotelsConnector\Element\Charges;
use Bronevik\HotelsConnector\Element\Child;
use Bronevik\HotelsConnector\Element\CorrectionAvailability;
use Bronevik\HotelsConnector\Element\Guest;
use Bronevik\HotelsConnector\Element\HotelOffer;
use Bronevik\HotelsConnector\Element\OrderServiceAccommodation;
use Bronevik\HotelsConnector\Element\SearchAvailabilityHotelOffer;
use Bronevik\HotelsConnector\Element\SearchOfferCriterionMeal;
use Bronevik\HotelsConnector\Element\UpdateService;
use Bronevik\HotelsConnector\Enum\BedTypes;
use Bronevik\HotelsConnector\Enum\ClassMaps;
use Bronevik\HotelsConnector\Enum\Endpoints;
use Bronevik\HotelsConnector\Enum\GuestsCounts;
use PHPUnit\Framework\TestCase;

/** @group unit */
class ContractTest extends TestCase
{
    public function testEndpoints()
    {
        $endpoints = [
            Endpoints::PRODUCTION,
            Endpoints::DEVELOPMENT,
            Endpoints::SECURE_PRODUCTION,
            Endpoints::SECURE_DEVELOPMENT,
        ];
        foreach (array_merge($endpoints, array_values(Endpoints::$wsdlUrls)) as $url) {
            $this->assertNotFalse(strpos($url, '/v2.6.0/'));
        }
    }

    public function testNewTypesAreRegisteredInClassMaps()
    {
        foreach ([ClassMaps::CLASSMAP_FOR_BASE_ENDPOINT, ClassMaps::CLASSMAP_FOR_SECURE_ENDPOINT] as $classMap) {
            $this->assertSame(Charge::class, $classMap['Charge']);
            $this->assertSame(Charges::class, $classMap['Charges']);
            $this->assertSame(Guest::class, $classMap['Guest']);
        }
        $this->assertSame(SearchOfferCriterionMeal::class, ClassMaps::CLASSMAP_FOR_BASE_ENDPOINT['SearchOfferCriterionMeal']);
    }

    public function testChargesAndOfferInformation()
    {
        $charge = new Charge();
        $charge->setName('Tax');
        $charge->setAmount(12.5);
        $charge->setCurrency('RUB');
        $charge->setIncluded(false);
        $charge->setDescription('Per stay');

        $charges = new Charges();
        $charges->addCharge($charge);

        foreach ([new HotelOffer(), new SearchAvailabilityHotelOffer(), new OrderServiceAccommodation()] as $offer) {
            $offer->setCharges($charges);
            $offer->setOfferInformationForGuest('Details');
            $this->assertSame($charges, $offer->getCharges());
            $this->assertSame('Details', $offer->getOfferInformationForGuest());
        }
        $this->assertTrue($charges->hasCharges());
        $this->assertSame([$charge], $charges->getCharges());
        $this->assertSame('Tax', $charge->getName());
        $this->assertSame(12.5, $charge->getAmount());
        $this->assertSame('RUB', $charge->getCurrency());
        $this->assertFalse($charge->getIncluded());
        $this->assertSame('Per stay', $charge->getDescription());
    }

    public function testGuestsMealAndCorrection()
    {
        $guest = new Guest();
        $guest->setGender('male');
        $guest->setCitizenship('RU');

        $child = new Child();
        $child->setFirstName('Sam');
        $child->setLastName('Smith');
        $child->setGender('male');
        $child->setCitizenship('RU');

        $meal = new SearchOfferCriterionMeal();
        $meal->addMeals(1);
        $meal->addMeals(2);

        $update = new UpdateService();
        $update->setAdultGuestCount(3);

        $availability = new CorrectionAvailability();
        $availability->setAdultGuestCount(true);

        $this->assertSame('male', $guest->getGender());
        $this->assertSame('RU', $guest->getCitizenship());
        $this->assertSame('Sam', $child->getFirstName());
        $this->assertSame('Smith', $child->getLastName());
        $this->assertSame('male', $child->getGender());
        $this->assertSame('RU', $child->getCitizenship());
        $this->assertTrue($meal->hasMeals());
        $this->assertSame([1, 2], $meal->getMeals());
        $this->assertSame(3, $update->getAdultGuestCount());
        $this->assertTrue($availability->getAdultGuestCount());
    }

    public function testAdultAccommodationRegisteredInClassMaps()
    {
        $this->assertSame(
            AdultAccommodation::class,
            ClassMaps::CLASSMAP_FOR_BASE_ENDPOINT['AdultAccommodation']
        );
        $this->assertSame(
            AdultAccommodation::class,
            ClassMaps::CLASSMAP_FOR_SECURE_ENDPOINT['AdultAccommodation']
        );
    }

    public function testAdultAccommodationAvailableInContractElements()
    {
        $adultAccommodation = new AdultAccommodation();
        $adultAccommodation->setMainAdults(2);
        $adultAccommodation->setExtraAdults(1);

        $baseOffer = new BaseOffer();
        $baseOffer->setAdultAccommodation($adultAccommodation);

        $orderServiceAccommodation = new OrderServiceAccommodation();
        $orderServiceAccommodation->setAdultAccommodation($adultAccommodation);

        $this->assertSame(2, $adultAccommodation->getMainAdults());
        $this->assertSame(1, $adultAccommodation->getExtraAdults());
        $this->assertSame($adultAccommodation, $baseOffer->getAdultAccommodation());
        $this->assertSame($adultAccommodation, $orderServiceAccommodation->getAdultAccommodation());
    }

    public function testExtraBedAndTenGuestsSupported()
    {
        $this->assertSame('extra-bed', BedTypes::EXTRA_BED);
        $this->assertSame(range(1, 10), GuestsCounts::all());
    }
}
