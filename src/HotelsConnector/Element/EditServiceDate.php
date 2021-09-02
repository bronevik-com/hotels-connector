<?php


namespace Bronevik\HotelsConnector\Element;


class EditServiceDate
{
    /**
     * @var string
     */
    public $minAvailableDate = null;

    /**
     * @var string
     */
    public $maxAvailableDate = null;

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
}
