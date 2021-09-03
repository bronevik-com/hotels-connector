<?php


namespace Bronevik\HotelsConnector\Element;

class EditServiceDate
{
    /**
     * Максимальная дата для коррекции
     * Maximum date for correction
     *
     * @var string
     */
    public $maxAvailableDate;

    /**
     * Минимальная дата для коррекции
     * Minimum date for correction
     *
     * @var string
     */
    public $minAvailableDate;

    /**
     * @return string
     */
    public function getMinAvailableDate()
    {
        return $this->minAvailableDate;
    }

    /**
     * @return string
     */
    public function getMaxAvailableDate()
    {
        return $this->maxAvailableDate;
    }

    /**
     * @param string $minAvailableDate
     */
    public function setMinAvailableDate($minAvailableDate)
    {
        $this->minAvailableDate = $minAvailableDate;
    }

    /**
     * @param string $maxAvailableDate
     */
    public function setMaxAvailableDate($maxAvailableDate)
    {
        $this->maxAvailableDate = $maxAvailableDate;
    }
}
