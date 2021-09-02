<?php


namespace Bronevik\HotelsConnector\Element;

class GetServiceAvailableCorrectionResponse extends BaseResponse
{
    /**
     * @var EditService | null
     */
    public $service = null;

    /**
     * @retrun EditService
     */
    public function getEditService()
    {
        return $this->service;
    }
}
