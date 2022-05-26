<?php

namespace Bronevik\HotelsConnector\Element;

use Bronevik\HotelsConnector\Enum\ChildAccommodationTypes;

/**
 * Информация о размещении для детей одного возраста
 * Accommodation information for children of the same age.
 */
class ChildAccommodation extends Child
{
    /**
     * Дети включены в услугу
     *
     * @var bool
     */
    public $included;

    /**
     * Тип размещения в номере
     *
     * @var string
     * @see ChildAccommodationTypes
     */
    public $accommodation;

    /**
     * @return bool
     */
    public function isIncluded()
    {
        return $this->included;
    }

    /**
     * @param bool $included
     *
     * @return ChildAccommodation
     */
    public function setIncluded($included)
    {
        $this->included = $included;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccommodation()
    {
        return $this->accommodation;
    }

    /**
     * @param string $accommodation
     *
     * @return ChildAccommodation
     */
    public function setAccommodation($accommodation)
    {
        $this->accommodation = $accommodation;

        return $this;
    }
}
