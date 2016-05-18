<?php
namespace Bronevik\HotelsConnector\Element;

class City
{
    /**
     * Type: xsd:int
     * 
     * @var int
     */
    public $id = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $name = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $latitude = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $longitude = null;

    /**
     * Type: xsd:int
     * 
     * @var int
     */
    public $regionId = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $regionName = null;

    /**
     * 
     * @param int $id 
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * 
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 
     * @param string $name 
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 
     * @param string $latitude 
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * 
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * 
     * @param string $longitude 
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * 
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * 
     * @param int $regionId 
     */
    public function setRegionId($regionId)
    {
        $this->regionId = $regionId;
    }

    /**
     * 
     * @return int
     */
    public function getRegionId()
    {
        return $this->regionId;
    }

    /**
     * 
     * @param string $regionName 
     */
    public function setRegionName($regionName)
    {
        $this->regionName = $regionName;
    }

    /**
     * 
     * @return string
     */
    public function getRegionName()
    {
        return $this->regionName;
    }
}

