<?php

namespace Sstottelaar\Pirsch;

use Statamic\Facades\CP\Nav;
use Statamic\Providers\AddonServiceProvider;
use Sstottelaar\Pirsch\Http\Middleware\PirschMiddleware;

class ServiceProvider extends AddonServiceProvider
{
    protected $middlewareGroups = [
        'web' => [
            PirschMiddleware::class,
        ],
    ];

    public function bootAddon()
    {
        $this->publishes([
            __DIR__.'/../config/pirsch.php' => config_path('pirsch.php'),
        ], 'pirsch-config');

        $dashboard_url = config('pirsch.dashboard_url', env('PIRSCH_DASHBOARD_URL'));

        if($dashboard_url) {
            Nav::extend(function ($nav) use ($dashboard_url) {
                $nav->create(__('Pirsch Dashboard'))
                    ->section('Tools')
                    ->url($dashboard_url)
                    ->icon('<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 26 38"><path d="M1 24c6.627 0 12-5.373 12-12S7.627 0 1 0v24zm24-10c-6.627 0-12 5.373-12 12s5.373 12 12 12V14z"></path><circle cx="21" cy="6" r="5"></circle><circle cx="5" cy="32" r="5"></circle></svg>');
            });
        }
    }
}
