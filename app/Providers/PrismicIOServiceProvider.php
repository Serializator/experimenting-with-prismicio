<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Prismic\Api as PrismicIO;

class PrismicIOServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(PrismicIO::class, function ($app) {
            return PrismicIO::get(config('prismicio.repository'));
        });
    }

    public function provides()
    {
        return [PrismicIO::class];
    }
}
