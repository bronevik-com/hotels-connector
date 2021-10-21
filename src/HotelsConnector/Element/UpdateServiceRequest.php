<?php

namespace Bronevik\HotelsConnector\Element;

class UpdateServiceRequest extends BaseRequest
{
    /**
     * Идентификатор изменяемой услуги.
     * The identifier of the service to be changed.
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
}
