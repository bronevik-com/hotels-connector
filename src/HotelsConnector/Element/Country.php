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
     * Код страны (трекхбуквенный)
     * The country code (three-letter)
     *
     * @var string
     */
    public $code;

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
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
}
