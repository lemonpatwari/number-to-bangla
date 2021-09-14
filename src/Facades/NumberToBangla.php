<?php

namespace lemonpatwari\BanglaNumber\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \lemonpatwari\BanglaNumber\NumberToBangla
 */
class NumberToBangla extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'bangla-number';
    }
}
