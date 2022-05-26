<?php

namespace Bronevik\HotelsConnector\Enum;

class ChildAccommodationTypes extends Enum
{
    /**
     * Размещение на дополнительном месте.
     * Accommodation on an extra bed.
     */
    const EXTRA = 'extra-bed';

    /**
     * Размещение без места.
     * Accommodation without a place.
     */
    const MAIN = 'main-bed';
}
