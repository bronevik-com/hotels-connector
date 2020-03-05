<?php

namespace Bronevik\HotelsConnector\Enum;

use ReflectionClass;
use ReflectionException;

abstract class Enum
{
    /**
     * @return array
     * @throws ReflectionException
     */
    public static function all()
    {
        $reflection = new ReflectionClass(static::class);

        return array_values($reflection->getConstants());
    }
}
