<?php

namespace Bronevik\HotelsConnector\Element;

class Credentials
{
    /**
     * Ключ клиента
     * The client key
     *
     * @var string
     */
    public $clientKey;

    /**
     * Логин пользователя
     * The client login
     *
     * @var string
     */
    public $login;

    /**
     * Пароль пользователя
     * The client password
     *
     * @var string
     */
    public $password;

    /**
     * @param string $clientKey
     */
    public function setClientKey($clientKey)
    {
        $this->clientKey = $clientKey;
    }

    /**
     * @return string
     */
    public function getClientKey()
    {
        return $this->clientKey;
    }

    /**
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}
