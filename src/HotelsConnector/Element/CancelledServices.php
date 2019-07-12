<?php

namespace Bronevik\HotelsConnector\Element;

class CancelledServices
{
    /**
     * Массив результатов аннуляции услуг.
     * Array of identifiers of the services to be canceled.
     *
     * @var CancelledService[]
     */
    public $service = [];

    /**
     * @return bool
     */
    public function hasService()
    {
        return count($this->service) > 0;
    }

    /**
     * @return CancelledService[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param CancelledService $service
     */
    public function addService($service)
    {
        $this->service[] = $service;
    }
}
