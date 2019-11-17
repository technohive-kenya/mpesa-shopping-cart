<?php

namespace TechnoHiveKenya\MpesaShoppingCart;

use Illuminate\Support\ServiceProvider;
use TechnoHiveKenya\MpesaShoppingCart\Services\MpesaShoppingCart;

class MpesaShoppingCartServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('mpesashoppingcard',function(){
            return new MpesaShoppingCart();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
