<?php

namespace Bronevik\Tests\V2_5_2;

use Bronevik\HotelsConnector\Element\AdultAccommodation;
use Bronevik\HotelsConnector\Element\BaseOffer;
use Bronevik\HotelsConnector\Element\OrderServiceAccommodation;
use Bronevik\HotelsConnector\Element\UpdateService;
use Bronevik\HotelsConnector\Enum\BedTypes;
use Bronevik\HotelsConnector\Enum\ClassMaps;
use Bronevik\HotelsConnector\Enum\Endpoints;
use Bronevik\HotelsConnector\Enum\GuestsCounts;
use PHPUnit\Framework\TestCase;

/**
 * @group unit
 */
class ContractTest extends TestCase
{
    public function testEndpoints()
    {
        $this->assertContains('/v2.5.2/', Endpoints::PRODUCTION);
        $this->assertContains('/v2.5.2/', Endpoints::DEVELOPMENT);
        $this->assertContains('/v2.5.2/', Endpoints::SECURE_PRODUCTION);
        $this->assertContains('/v2.5.2/', Endpoints::SECURE_DEVELOPMENT);

        foreach (Endpoints::$wsdlUrls as $wsdlUrl) {
            $this->assertContains('/v2.5.2/', $wsdlUrl);
        }
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

        $updateService = new UpdateService();
        $updateService->setRoomType('double');
        $updateService->setAdultAccommodation($adultAccommodation);

        $this->assertSame(2, $adultAccommodation->getMainAdults());
        $this->assertSame(1, $adultAccommodation->getExtraAdults());
        $this->assertSame($adultAccommodation, $baseOffer->getAdultAccommodation());
        $this->assertSame($adultAccommodation, $orderServiceAccommodation->getAdultAccommodation());
        $this->assertSame('double', $updateService->getRoomType());
        $this->assertSame($adultAccommodation, $updateService->getAdultAccommodation());
    }

    public function testExtraBedAndTenGuestsSupported()
    {
        $this->assertSame('extra-bed', BedTypes::EXTRA_BED);
        $this->assertSame(range(1, 10), GuestsCounts::all());
    }
}
