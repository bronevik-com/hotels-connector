<?php


namespace Bronevik\HotelsConnector\Element;

class TimeRange
{
    /**
     * Начальное время.
     * Start time.
     *
     * @var string
     */
    public $timeFrom;

    /**
     * Конечное время.
     * End time.
     *
     * @var string
     */
    public $timeTo;

    /**
     * @return string
     */
    public function getTimeFrom()
    {
        return $this->timeFrom;
    }

    /**
     * @param string $timeFrom
     */
    public function setTimeFrom($timeFrom)
    {
        $this->timeFrom = $timeFrom;
    }

    /**
     * @return string
     */
    public function getTimeTo()
    {
        return $this->timeTo;
    }

    /**
     * @param string $timeTo
     */
    public function setTimeTo($timeTo)
    {
        $this->timeTo = $timeTo;
    }
}
