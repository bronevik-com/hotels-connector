<?php
namespace Bronevik\HotelsConnector\Element;

class Image
{
    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $guid = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $url = null;

    /**
     * 
     * @param string $guid 
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
    }

    /**
     * 
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * 
     * @param string $url 
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * 
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}

