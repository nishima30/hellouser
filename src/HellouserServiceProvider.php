<?php

namespace Nishima\Hellouser;

use Illuminate\Support\ServiceProvider;

class HellouserServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load the routes from the package's routes file
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }

    public function register()
    {
        // Register any bindings or singletons, if necessary
    }
}
