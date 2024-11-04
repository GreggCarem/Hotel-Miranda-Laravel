<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\PaymentProvider;
use App\Services\PaypalPaymentProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(PaymentProvider::class, PaypalPaymentProvider::class);
    }

    public function boot()
    {
 
    }
}