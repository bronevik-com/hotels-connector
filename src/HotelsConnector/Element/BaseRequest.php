<?php

namespace Bronevik\HotelsConnector\Element;

use Bronevik\HotelsConnector\Enum\Languages;

/**
 * Базовая структура запроса
 * The base structure of request
 */
abstract class BaseRequest
{
    /**
     * Идентификационные данные
     * The identification data
     *
     * @var Credentials
     */
    public $credentials;

    /**
     * Язык, используемый в ответе
     * The response language
     *
     * @see Languages
     * @var string
     */
    public $language;

    public function __construct()
    {
        $this->credentials = new Credentials();
    }

    /**
     * @param Credentials $credentials
     */
    public function setCredentials($credentials)
    {
        $this->credentials = $credentials;
    }

    /**
     * @return Credentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }
}
