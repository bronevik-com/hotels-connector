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
     * @var string | null
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
     * @param string | null $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return string | null
     */
    public function getValue()
    {
        return $this->value;
    }
}
