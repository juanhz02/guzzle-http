<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;

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
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      //Crear instancia de guzzle una sola vez
      $this->app->singleton('GuzzleHttp\Client', function (){
        return new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://jsonplaceholder.typicode.com',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
      });
    }
}
