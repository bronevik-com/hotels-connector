<?php


namespace Bronevik\HotelsConnector\Element;

class Guest
{
    /**
     * Имя гостя
     * Guest Name
     *
     * @var string
     */
    public $firstName;

    /**
     * Фамилия гостя
     * Guest surname
     *
     * @var string
     */
    public $lastName;

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
}
