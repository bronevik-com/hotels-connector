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
     * @retrun EditService
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
