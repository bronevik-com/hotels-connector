<?php

namespace Bronevik\HotelsConnector\Element;

class OrderServiceAccommodationPricing extends OrderServicePricing
{
    /**
     * @var string
     */
    public $offerCode;

    /**
     * @var string
     */
    public $checkin;

    /**
     * @var string
     */
    public $checkout;

    /**
     * Флаг невозвратности предложения
     * @var boolean
     */
    public $nonRefundable;

    /**
     * Номер является блочным. Блочный номер - это номер с общей ванной комнатой и
     * туалетом для нескольких номеров
     * @var boolean
     */
    public $isBlockRoom;

    /**
     * @var \Bronevik\HotelsConnector\Element\AvailableMeals
     */
    public $meals;

    /**
     * @var \Bronevik\HotelsConnector\Element\OfferPolicy[]
     */
    public $offerPolicies = [];

    /**
     * @var \Bronevik\HotelsConnector\Element\DailyPrices
     */
    public $dailyPrices;

}

