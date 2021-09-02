<?php


namespace Bronevik\HotelsConnector\Element;


class GetServicePricingRequest extends BaseRequest
{
    /**
     * @var int | null
     */
    public $serviceId = null;

    /**
     * @var UpdateService | null
     */
    public $updateService = null;

    /**
     * @param int|null $serviceId
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;
    }

    /**
     * @param UpdateService|null $updateService
     */
    public function setUpdateService($updateService)
    {
        $this->updateService = $updateService;
    }
}
