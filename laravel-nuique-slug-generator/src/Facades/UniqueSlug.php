<?php

namespace Sumon\LaravelNuiqueSlugGenerator;


use Illuminate\Support\Facades\Facade;


class uniqueSlug extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor():string
    {

        return  'laravel-unique-slug';

    }


}
