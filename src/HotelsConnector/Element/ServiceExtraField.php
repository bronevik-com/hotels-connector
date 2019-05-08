<?php

namespace Bronevik\HotelsConnector\Element;

class ServiceExtraField
{
    /**
     * Название дополнительного поля для услуги
     * The service extra field name
     *
     * @var string
     */
    public $name;

    /**
     * Значение дополнительного поля
     * The service extra field value
     *
     * @var string
     */
    public $value;

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
