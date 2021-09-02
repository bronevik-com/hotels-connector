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
     * @var UpdateService
     */
    public $updateService;

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
