<?php

namespace Bronevik\HotelsConnector\Element;

class NamedDetailedPrice extends DetailedPrice
{
    /**
     * Наименование цены
     * The price name
     *
     * @var string
     */
    public $name;

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
}
