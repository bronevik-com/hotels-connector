<?php

namespace Bronevik\HotelsConnector\Element;

class GetCitiesRequest extends BaseRequest
{
    /**
     * @var int
     */
    public $countryId;

    /**
     * @return int
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * @param int $countryId
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
    }
}
