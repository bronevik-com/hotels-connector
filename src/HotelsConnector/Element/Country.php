<?php

namespace Bronevik\HotelsConnector\Element;

class Country
{
    /**
     * Идентификатор страны
     * The country id
     *
     * @var int
     */
    public $id;

    /**
     * Название страны
     * The country name
     *
     * @var string
     */
    public $name;

    /**
     * Коды страны
     * The country codes
     *
     * @var CountryCodes
     */
    public $codes;

    public function __construct()
    {
        $this->codes = new CountryCodes();
    }

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
     * @param CountryCodes $codes
     */
    public function setCodes($codes)
    {
        $this->codes = $codes;
    }

    /**
     * @return CountryCodes
     */
    public function getCodes()
    {
        return $this->codes;
    }
}
