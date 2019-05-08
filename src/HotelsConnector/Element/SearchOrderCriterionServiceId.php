<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Поиск заказа по номеру услуги проживания
 * The order search by service ID
 */
class SearchOrderCriterionServiceId extends SearchOrderCriterion
{
    /**
     * @var int
     */
    public $serviceId;

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
}
