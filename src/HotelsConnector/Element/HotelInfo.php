<?php

namespace Bronevik\HotelsConnector\Element;

class HotelInfo
{
    /**
     * Описание отеля.
     * Description of the hotel.
     *
     * @var string
     */
    public $description;

    /**
     * Название отеля.
     * Hotel name.
     *
     * @var string
     */
    public $name;

    /**
     * Категория отеля.
     * Hotel category.
     *
     * @var int
     */
    public $category;

    /**
     * Тип отеля.
     * The type of the hotel.
     *
     * @var string
     */
    public $type;

    /**
     * Главная фотография отеля.
     * Main photo of the hotel.
     *
     * @var Image
     */
    public $photo;

    /**
     * ​Элемент для работы метапоисковых систем.
     * The element for metasearch engines.
     *
     * @var string
     */
    public $deepLink;

    /**
     * Условия оплаты.
     * Payment terms.
     *
     * @var string
     */
    public $paymentTerms;

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param Image $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return Image
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param string $deepLink
     */
    public function setDeepLink($deepLink)
    {
        $this->deepLink = $deepLink;
    }

    /**
     * @return string
     */
    public function getDeepLink()
    {
        return $this->deepLink;
    }

    /**
     * @return string
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * @param string $paymentTerms
     */
    public function setPaymentTerms($paymentTerms)
    {
        $this->paymentTerms = $paymentTerms;
    }
}
