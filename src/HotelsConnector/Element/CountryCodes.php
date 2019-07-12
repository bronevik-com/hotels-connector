<?php

namespace Bronevik\HotelsConnector\Element;

class CountryCodes
{
    /**
     * Код ISO3 2-буквенный, IATA
     * The code ISO3 biliteral, IATA
     *
     * @var string
     */
    public $alpha2;

    /**
     * Код ISO3 3-буквенный
     * The code ISO3 three-letter
     *
     * @var string
     */
    public $alpha3;

    /**
     * @param string $alpha2
     */
    public function setAlpha2($alpha2)
    {
        $this->alpha2 = $alpha2;
    }

    /**
     * @return string
     */
    public function getAlpha2()
    {
        return $this->alpha2;
    }

    /**
     * @param string $alpha3
     */
    public function setAlpha3($alpha3)
    {
        $this->alpha3 = $alpha3;
    }

    /**
     * @return string
     */
    public function getAlpha3()
    {
        return $this->alpha3;
    }
}
