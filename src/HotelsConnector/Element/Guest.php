<?php


namespace Bronevik\HotelsConnector\Element;

class Guest
{
    /**
     * Пол гостя.
     *
     * @var string|null
     */
    public $gender;

    /**
     * Гражданство гостя.
     *
     * @var string|null
     */
    public $citizenship;

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
    /**
     * @return string|null
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string|null $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return string|null
     */
    public function getCitizenship()
    {
        return $this->citizenship;
    }

    /**
     * @param string|null $citizenship
     */
    public function setCitizenship($citizenship)
    {
        $this->citizenship = $citizenship;
    }

}
