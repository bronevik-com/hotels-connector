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
     * Номер услуги в системе клиента
     * The service number in the client system
     *
     * @var string
     */
    public $referenceId;

    /**
     * @param int $serviceId
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;
    }

    /**
     * @return int
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * @param string $referenceId
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;
    }

    /**
     * @return string
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }
}
