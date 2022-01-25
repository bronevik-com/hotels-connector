<?php

namespace Bronevik\HotelsConnector\Element;

class HotelInfo
{
    /**
     * Описание отеля.
     * Description of the hotel.
     *
     * @var string | null
     */
    public $description;

    /**
     * Название отеля.
     * Hotel name.
     *
     * @var string | null
     */
    public $name;

    /**
     * Категория отеля.
     * Hotel category.
     *
     * @var int | null
     */
    public $category;

    /**
     * Тип отеля.
     * The type of the hotel.
     *
     * @var string | null
     */
    public $type;

    /**
     * Главная фотография отеля.
     * Main photo of the hotel.
     *
     * @var Image | null
     */
    public $photo;

    /**
     * ​Элемент для работы метапоисковых систем.
     * The element for metasearch engines.
     *
     * @var string | null
     */
    public $deepLink;

    /**
     * Условия оплаты.
     * Payment terms.
     *
     * @var string | null
     */
    public $paymentTerms;

    /**
     * @param string | null $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string | null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string | null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string | null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int | null $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return int | null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string | null $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string | null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param Image | null $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return Image | null
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param string | null $deepLink
     */
    public function setDeepLink($deepLink)
    {
        $this->deepLink = $deepLink;
    }

    /**
     * @return string | null
     */
    public function getDeepLink()
    {
        return $this->deepLink;
    }

    /**
     * @return string | null
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * @param string | null $paymentTerms
     */
    public function setPaymentTerms($paymentTerms)
    {
        $this->paymentTerms = $paymentTerms;
    }
}
