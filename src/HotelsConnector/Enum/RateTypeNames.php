<?php

namespace Bronevik\HotelsConnector\Enum;

class RateTypeNames extends Enum
{
    const REFUNDABLE_RATE                           = 'RefundableRate';
    const NON_REFUNDABLE_RATE                       = 'NonrefundableRate';
    const NON_REFUNDABLE_RATE_SPECIAL_BRONEVIK_RATE = 'NonRefundableSpecialBronevikRate';
    const LHP                                       = 'LHP';
}
