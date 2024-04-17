<?php

namespace Bronevik\HotelsConnector\Element;

use Bronevik\HotelsConnector\Enum\VatPercents;

class HotelVatInfo
{
    /**
     * Применим ли к отелю НДС.
     * Returns `true` for properties located in Russian Federation and `false` for foreign properties.
     *
     * @var boolean
     */
    public $applicable;

    /**
     * Включен ли НДС в стоимость.
     * Flag of whether VAT is included in the client’s price.
     *
     * @var boolean
     */
    public $included;

    /**
     * Процент НДС в отеле.
     * Percentage of VAT at the hotel.
     *
     * @var int
     * @see VatPercents
     */
    public $percent;

    /**
     * @param boolean $applicable
     */
    public function setApplicable($applicable)
    {
        $this->applicable = $applicable;
    }

    /**
     * @return boolean
     */
    public function getApplicable()
    {
        return $this->applicable;
    }

    /**
     * @param boolean $included
     */
    public function setIncluded($included)
    {
        $this->included = $included;
    }

    /**
     * @return boolean
     */
    public function getIncluded()
    {
        return $this->included;
    }

    /**
     * @param int $percent
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
    }

    /**
     * @return int
     */
    public function getPercent()
    {
        return $this->percent;
    }
}
