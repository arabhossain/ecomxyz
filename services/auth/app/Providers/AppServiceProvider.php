<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(){
        \Dusterio\LumenPassport\LumenPassport::routes($this->app);
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        \Dusterio\LumenPassport\LumenPassport::routes($this->app, ['prefix' => 'v1/oauth']);
    }
}
