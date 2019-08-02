<?php

namespace Bronevik\HotelsConnector\Enum;

abstract class AvailabilityCodes
{
    /**
     * Заезд/выезд доступен с мгновенным подтверждением
     */
    const AVAILABLE = 0;

    /**
     * Заезд/выезд доступен под запрос
     */
    const AVAILABLE_ON_REQUEST = 1;

    /**
     * Указанное значение недоступно для этого предложения
     */
    const NOT_AVAILABLE_FOR_OFFER = 2;

    /**
     * Ранний заезд или поздний выезд недоступен в выбранном отеле
     */
    const NOT_AVAILABLE_IN_HOTEL = 3;
}
