<?php
namespace Sumon\LaravelNuiqueSlugGenerator;

use Illuminate\Support\ServiceProvider;


class UniqueSlugServiceProvider extends ServiceProvider{

    public function register()
    {
       $this->app->bind('laravel-unique-slug',function ($app){

           return new Sumon\LaravelNuiqueSlugGenerator\UniqueSlug();
       });

    }


    public function boot(){


    }

}

