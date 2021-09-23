<?php


namespace Bronevik\HotelsConnector\Element;

class GetServiceAvailableCorrectionsRequest extends BaseRequest
{
    /**
     * Идентификаторы услуг
     * Service identifiers
     *
     * @var int[]
     */
    public $serviceId = [];

    /**
     * Виды дополнительных услуг по которым нужна информация
     * Types of additional services for which information is needed
     *
     * @var AvailableCorrectionTypes
     */
    public $availableCorrectionTypes;

    public function __construct()
    {
        parent::__construct();
        $this->availableCorrectionTypes = new AvailableCorrectionTypes();
    }

    /**
     * @return int[]
     */
    public function getServiceId()
    {
        return $this->serviceId;
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
        $this->serviceId[] = $serviceId;
    }

    /**
     * @return AvailableCorrectionTypes|null
     */
    public function getAvailableCorrectionTypes()
    {
        return $this->availableCorrectionTypes;
    }
}
