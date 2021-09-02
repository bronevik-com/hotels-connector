<?php


namespace Bronevik\HotelsConnector\Element;

class GetServiceAvailableCorrectionRequest extends BaseRequest
{
    /**
     * @var int[]
     */
    public $serviceIds = [];

    /**
     * @var AvailableCorrectionTypes | null
     */
    public $availableCorrectionTypes = null;

    /**
     * @return int[]
     */
    public function getServiceIds()
    {
        return $this->serviceIds;
    }

    /**
     * @param array $serviceIds
     */
    public function setServiceIds($serviceIds)
    {
        $this->serviceIds = $serviceIds;
    }

    /**
     * @param AvailableCorrectionTypes $availableCorrectionTypes
     */
    public function setAvailableCorrectionTypes($availableCorrectionTypes)
    {
        $this->availableCorrectionTypes = $availableCorrectionTypes;
    }

    /**
     * @param int $serviceId
     */
    public function addServiceId($serviceId)
    {
        $this->serviceIds[] = $serviceId;
    }
}
