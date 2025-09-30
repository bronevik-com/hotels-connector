<?php


namespace Bronevik\HotelsConnector\Element;

class GetServiceAvailableCorrectionsResponse extends BaseResponse
{
    /**
     * Информация о коррекции услуги
     * Service correction information
     *
     * @var EditService
     */
    public $service;

    /**
     * @return EditService
     */
    public function getEditService()
    {
        return $this->service;
    }

    /**
     * @param EditService $service
     */
    public function setService($service)
    {
        $this->service = $service;
    }
}
