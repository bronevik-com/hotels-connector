<?php
namespace Bronevik\HotelsConnector\Element;

class Credentials
{
    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $clientKey = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $login = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $password = null;

    /**
     * 
     * @param string $clientKey 
     */
    public function setClientKey($clientKey)
    {
        $this->clientKey = $clientKey;
    }

    /**
     * 
     * @return string
     */
    public function getClientKey()
    {
        return $this->clientKey;
    }

    /**
     * 
     * @param string $login 
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * 
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * 
     * @param string $password 
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * 
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}

