<?php

namespace App\Providers;

use App\Facade\Invoice;
use Illuminate\Support\ServiceProvider;
use App\Repository\Product\InterfaceProduct;
use App\Repository\Product\RepositoryProduct;


class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(InterfaceProduct::class, RepositoryProduct::class);

        //Facades
        $this->app->bind('Invoice', function(){
            return new Invoice();
        });

    }

    public function boot(): void
    {
        //
    }
}
