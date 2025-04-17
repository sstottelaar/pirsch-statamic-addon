<?php

namespace Sstottelaar\Pirsch;

use Statamic\Facades\CP\Nav;
use Statamic\Providers\AddonServiceProvider;
use Sstottelaar\Pirsch\Http\Middleware\PirschMiddleware;

class ServiceProvider extends AddonServiceProvider
{
    // protected $vite = [
    //     'input' => [
    //         'resources/js/cp.js',
    //         'resources/css/cp.css',
    //     ],
    //     'publicDirectory' => 'resources/dist',
    // ];

    // protected $middlewareGroups = [
        // 'web' => [
        //     PirschMiddleware::class,
        // ],
    // ];

    // protected $routes = [
    //     'cp' => __DIR__.'/../routes/cp.php',
    // ];

    public function bootAddon()
    {
        $this->publishes([
            __DIR__.'/../config/pirsch.php' => config_path('pirsch.php'),
        ], 'pirsch-config');

        // Nav::extend(function ($nav) {
        //     $nav->create('Pirsch')
        //         ->section('Tools')
        //         ->route('pirsch.index')
        //         ->icon('<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 26 38"><path d="M1 24c6.627 0 12-5.373 12-12S7.627 0 1 0v24zm24-10c-6.627 0-12 5.373-12 12s5.373 12 12 12V14z"></path><circle cx="21" cy="6" r="5"></circle><circle cx="5" cy="32" r="5"></circle></svg>');
        // });
    }
}
