<?php

namespace Bronevik\HotelsConnector\Enum;

abstract class PaymentRecipients
{
    // безналичный расчёт
    const AGENCY = 'agency';
    // оплата в отеле
    const HOTEL = 'hotel';
}
