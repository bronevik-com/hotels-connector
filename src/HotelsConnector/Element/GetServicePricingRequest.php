<?php


namespace Bronevik\HotelsConnector\Element;

class GetServicePricingRequest extends BaseRequest
{
    /**
     * Идентификатор услуги
     * Service ID
     *
     * @var int
     */
    public $serviceId;

    /**
     * Изменения, которые планируется внести в услугу проживания
     * Changes to be made to the accommodation service
     *
     * @var UpdateService
     */
    public $updateService;

    public function __construct()
    {
        parent::__construct();
        $this->updateService = new UpdateService();
    }

    /**
     * @return int
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * @return UpdateService
     */
    public function getUpdateService()
    {
        return $this->updateService;
    }

    /**
     * @param int $serviceId
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;
    }

    /**
     * @param UpdateService $updateService
     */
    public function setUpdateService($updateService)
    {
        $this->updateService = $updateService;
    }
}
