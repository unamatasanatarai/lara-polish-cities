<?php

namespace Unamatasanatarai\GeoCities;

use Illuminate\Support\ServiceProvider;

class GeoCitiesServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/migrations/');
    }

}
