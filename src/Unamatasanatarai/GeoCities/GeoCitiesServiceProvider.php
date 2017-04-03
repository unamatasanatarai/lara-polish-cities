<?php

namespace Unamatasanatarai\GeoCities;

class GeoCitiesServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/migrations/');
    }

}
