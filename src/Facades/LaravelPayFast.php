<?php

namespace EllisSystems\LaravelPayFast\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \EllisSystems\LaravelPayFast\LaravelPayFast
 */
class LaravelPayFast extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-payfast';
    }
}
