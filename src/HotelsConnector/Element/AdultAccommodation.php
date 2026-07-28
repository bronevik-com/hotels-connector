<?php

namespace Bronevik\HotelsConnector\Element;

class AdultAccommodation
{
    /**
     * Количество взрослых гостей на основных местах
     * Number of adult guests in main beds
     *
     * @var int
     */
    public $mainAdults;

    /**
     * Количество взрослых гостей на дополнительных местах
     * Number of adult guests in extra beds
     *
     * @var int
     */
    public $extraAdults;

    /**
     * @param int $mainAdults
     */
    public function setMainAdults($mainAdults)
    {
        $this->mainAdults = $mainAdults;
    }

    /**
     * @return int
     */
    public function getMainAdults()
    {
        return $this->mainAdults;
    }

    /**
     * @param int $extraAdults
     */
    public function setExtraAdults($extraAdults)
    {
        $this->extraAdults = $extraAdults;
    }

    /**
     * @return int
     */
    public function getExtraAdults()
    {
        return $this->extraAdults;
    }
}
