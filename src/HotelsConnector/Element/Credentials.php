<?php
namespace Bronevik\HotelsConnector\Element;

class Credentials
{
    /**
     * Ключ клиента
     * The client key
     * Type: xsd:string
     * 
     * @var string
     */
    public $clientKey = null;

    /**
     * Логин пользователя
     * The client login
     * Type: xsd:string
     * 
     * @var string
     */
    public $login = null;

    /**
     * Пароль пользователя
     * The client password
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

