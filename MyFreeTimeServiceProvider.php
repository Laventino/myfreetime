<?php

namespace MyFreeTimeAtHome\Packege;
use Illuminate\Support\ServiceProvider;
class MyFreeTimeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../src/index.php' => storage_path('app/public'),
        ]);
    }
    public function register()
    {
        
    }
}