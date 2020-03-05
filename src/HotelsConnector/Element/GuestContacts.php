<?php

namespace Bronevik\HotelsConnector\Element;

class GuestContacts
{
    /**
     * Адрес электронной почты гостя.
     * Guest email address.
     *
     * @var string
     */
    public $email;

    /**
     * Номер телефона гостя.
     * Guest phone number.
     *
     * @var string
     */
    public $phone;

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }
}
