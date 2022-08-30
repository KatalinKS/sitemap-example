<?php

namespace App\Providers;

use App\Source\Sitemap\SitemapData;
use Illuminate\Support\ServiceProvider;
use KatalinKS\Sitemap\Contracts\SitemapDataContract;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SitemapDataContract::class, SitemapData::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
