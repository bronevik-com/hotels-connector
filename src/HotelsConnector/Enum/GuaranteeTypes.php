<?php

namespace Bronevik\HotelsConnector\Enum;

class GuaranteeTypes
{
    /**
     * Наличные с гарантией договором
     */
    const CLIENT_CONTRACT = 'contract';

    /**
     * Наличные с гарантией картой гостя CVV требуется
     */
    const CONSUMER_CARD_WITH_CVV = 'cardWithCVV';

    /**
     * Наличные с гарантией картой гостя CVV не требуется
     */
    const CONSUMER_CARD_WITHOUT_CVV = 'cardWithoutCVV';
}
