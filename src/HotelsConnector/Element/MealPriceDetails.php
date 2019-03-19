<?php

namespace Bronevik\HotelsConnector\Element;

class MealPriceDetails extends ClientPriceDetails
{
    /**
     * Идентификатор услуги питания
     * The meal service id
     *
     * @var int
     */
    public $id;

    /**
     * Включена ли услуга в предложение
     * Whether the meal service is included in the offer
     *
     * @var boolean
     */
    public $included;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
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
}
