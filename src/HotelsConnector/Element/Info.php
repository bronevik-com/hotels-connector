<?php

namespace Bronevik\HotelsConnector\Element;

class Info
{
    /**
     * Название поля дополнительной информации
     * Name of additional info field
     *
     * @var string
     */
    public $name;

    /**
     * Значение поля дополнительной информации
     * Value of additional info field
     *
     * @var string
     */
    public $value;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

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
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}
