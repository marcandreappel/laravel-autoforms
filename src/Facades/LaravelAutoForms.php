<?php

namespace MarcAndreAppel\LaravelAutoForms\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelAutoForms extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravelautoforms';
    }
}
