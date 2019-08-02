<?php

namespace Bronevik\HotelsConnector\Element;

class CancelServicesRequest extends BaseRequest
{
    /**
     * Идентификаторы услуг, которые необходимо аннулировать.
     * Identifiers of the services to be canceled.
     *
     * @var ServiceIdsForCancellation
     */
    public $serviceIds;

    public function __construct()
    {
        parent::__construct();
        $this->serviceIds = new ServiceIdsForCancellation();
    }

    /**
     * @param ServiceIdsForCancellation $serviceIds
     */
    public function setServiceIds($serviceIds)
    {
        $this->serviceIds = $serviceIds;
    }

    /**
     * @return ServiceIdsForCancellation
     */
    public function getServiceIds()
    {
        return $this->serviceIds;
    }
}
