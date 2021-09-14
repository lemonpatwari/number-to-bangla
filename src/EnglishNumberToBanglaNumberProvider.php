<?php

namespace lemonpatwari\BanglaNumber;

use Illuminate\Support\ServiceProvider;
use lemonpatwari\BanglaNumber\Console\LpCommand;


class EnglishNumberToBanglaNumberProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->app->singleton(NumberToBangla::class);

            $this->app->alias(NumberToBangla::class, 'bangla-number');


            $this->commands([
                LpCommand::class,
            ]);
        }
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
