<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use Illuminate\Support\Facades\Schema;
=======

>>>>>>> db4c825b1e1e9566248a691f77f04eb121a7a1b1
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
<<<<<<< HEAD
        Schema::defaultStringLength(191);
=======
>>>>>>> db4c825b1e1e9566248a691f77f04eb121a7a1b1
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
