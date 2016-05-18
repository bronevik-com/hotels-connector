<?php
namespace Bronevik\HotelsConnector\Element;

abstract class BaseRequest
{
    /**
     * Type: tns:Credentials
     * 
     * @var \Bronevik\HotelsConnector\Element\Credentials
     */
    public $credentials = null;

    /**
     * Type: 
     * 
     * @var 
     */
    public $language = null;

    /**
     * 
     */
    public function __construct()
    {
        $this->credentials = new \Bronevik\HotelsConnector\Element\Credentials;
    }

    /**
     * 
     * @param \Bronevik\HotelsConnector\Element\Credentials $credentials 
     */
    public function setCredentials($credentials)
    {
        $this->credentials = $credentials;
    }

    /**
     * 
     * @return \Bronevik\HotelsConnector\Element\Credentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * 
     * @param  $language 
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * 
     */
    public function getLanguage()
    {
        return $this->language;
    }
}

