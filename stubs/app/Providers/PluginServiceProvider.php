<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PluginServiceProvider extends ServiceProvider
{
 
    public function boot(): void
    {
        
        //config('plugin.grass_feria_starterkid_tester') && $this->app->register(\GrassFeria\StarterkidTester\Providers\AppServiceProvider::class);

    }
}
