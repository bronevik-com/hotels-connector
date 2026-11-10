<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Ребенок для запроса
 * Child for request
 */
class Child
{
    /**
     * Имя ребёнка.
     *
     * @var string|null
     */
    public $firstName;

    /**
     * Фамилия ребёнка.
     *
     * @var string|null
     */
    public $lastName;

    /**
     * Пол ребёнка.
     *
     * @var string|null
     */
    public $gender;

    /**
     * Гражданство ребёнка.
     *
     * @var string|null
     */
    public $citizenship;

    /**
     * Возраст.
     * Age.
     *
     * @var int
     */
    public $age;

    /**
     * Количество детей данного возраста.
     * Number of children of age.
     *
     * @var int
     */
    public $count;

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param int $age
     *
     * @return Child
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     *
     * @return Child
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string|null $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string|null $lastName
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
