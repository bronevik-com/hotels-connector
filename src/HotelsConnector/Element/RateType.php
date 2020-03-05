<?php

namespace Bronevik\HotelsConnector\Element;

use Bronevik\HotelsConnector\Enum\RateTypeNames;

class RateType
{
    /**
     * Тип тарифа.
     * Rate type.
     *
     * @var string
     * @see RateTypeNames
     */
    public $rateName;

    /**
     * Описание условий предоставления тарифа.
     * The description of rate conditions.
     *
     * @var string
     */
    public $rateDescription;

    /**
     * @param string $rateName
     */
    public function setRateName($rateName)
    {
        $this->rateName = $rateName;
    }

    /**
     * @return string
     */
    public function getRateName()
    {
        return $this->rateName;
    }

    /**
     * @param string $rateDescription
     */
    public function setRateDescription($rateDescription)
    {
        $this->rateDescription = $rateDescription;
    }

    /**
     * @return string
     */
    public function getRateDescription()
    {
        return $this->rateDescription;
    }
}
