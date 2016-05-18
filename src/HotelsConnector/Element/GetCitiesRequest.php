<?php
namespace Bronevik\HotelsConnector\Element;

class GetCitiesRequest extends BaseRequest
{
    /**
     * Type: xsd:int
     * 
     * @var int
     */
    public $countryId = null;

    /**
     * 
     * @param int $countryId 
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
    }

    /**
     * 
     * @return int
     */
    public function getCountryId()
    {
        return $this->countryId;
    }
}

