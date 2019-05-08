<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Поиск по дате заезда
 * The order search by check-in date
 */
class SearchOrderCriterionArrivalDate extends SearchOrderCriterion
{
    /**
     * @var string
     */
    public $dateStart;

    /**
     * @var string
     */
    public $dateEnd;

    /**
     * @param string $dateStart
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
    }

    /**
     * @return string
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * @param string $dateEnd
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;
    }

    /**
     * @return string
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }
}
