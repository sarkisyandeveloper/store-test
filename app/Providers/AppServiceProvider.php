<?php

namespace App\Providers;

use App\Payment\ApplePayPayment;
use App\Payment\PaymentGatewayContract;
use App\Payment\PayPallPayment;
use App\Payment\StripePayment;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentGatewayContract::class, function($app) {

            if(request()->has('apple_pay')) {
                return new ApplePayPayment('usd');
            }

            if(request()->has('pay_pall')) {
                return new PayPallPayment('usd');
            }

            if(request()->has('stripe')) {
                return new StripePayment('uah');
            }

            return 'Unknown';
        });
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
