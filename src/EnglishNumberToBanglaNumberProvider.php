<?php

namespace lemonpatwari\BanglaNumber;

use Illuminate\Support\ServiceProvider;

class EnglishNumberToBanglaNumberProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(NumberToBangla::class);

        $this->app->alias(NumberToBangla::class, 'bangla-number');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }
}
