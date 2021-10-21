<?php

namespace Bronevik\HotelsConnector\Element;

class GetCitiesRequest extends BaseRequest
{
    /**
     * @var int
     */
    public $countryId;

    /**
     * Массив идентификаторов городов.
     * Array of city ids.
     *
     * @var CityIds|null
     */
    public $cityIds = null;

    /**
     * @param int $countryId
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * @return CityIds|null
     */
    public function getCityIds()
    {
        return $this->cityIds;
    }

    /**
     * @param CityIds|null $cityIds
     */
    public function setCityIds($cityIds)
    {
        $this->cityIds = $cityIds;
    }
}
