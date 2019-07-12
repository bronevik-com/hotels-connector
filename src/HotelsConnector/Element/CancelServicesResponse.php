<?php

namespace Bronevik\HotelsConnector\Element;

class CancelServicesResponse extends BaseResponse
{
    /**
     * Результат аннуляции услуг.
     * Result of cancellation of services.
     *
     * @var CancelledServices
     */
    public $services = null;

    public function __construct()
    {
        $this->services = new CancelledServices();
    }

    /**
     * @param CancelledServices $services
     */
    public function setServices($services)
    {
        $this->services = $services;
    }

    /**
     * @return CancelledServices
     */
    public function getServices()
    {
        return $this->services;
    }
}
