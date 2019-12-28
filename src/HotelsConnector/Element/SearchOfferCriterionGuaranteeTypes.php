<?php

namespace Bronevik\HotelsConnector\Element;

use Bronevik\HotelsConnector\Enum\GuaranteeTypes;

/**
 * Поиск по типам гарантии
 * The offer search by guarantee types
 */
class SearchOfferCriterionGuaranteeTypes
{
    /**
     * Тип гарантии
     * Guarantee type
     *
     * @var string[]
     * @see GuaranteeTypes
     */
    public $guaranteeType = [];

    /**
     * @return bool
     */
    public function hasGuaranteeType()
    {
        return count($this->guaranteeType) > 0;
    }

    /**
     * @return string[]
     */
    public function getGuaranteeType()
    {
        return $this->guaranteeType;
    }

    /**
     * @param string $guaranteeType
     */
    public function addGuaranteeType($guaranteeType)
    {
        $this->guaranteeType[] = $guaranteeType;
    }
}
