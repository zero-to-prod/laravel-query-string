<?php

namespace ZeroToProd\LaravelQueryString;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ZeroToProd\LaravelQueryString\LaravelQueryString
 */
class LaravelQueryStringFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-query-string';
    }
}
