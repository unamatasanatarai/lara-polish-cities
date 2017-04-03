<?php

namespace Unamatasanatarai\GeoCities;

use Illuminate\Support\ServiceProvider;
use Unamatasanatarai\GeoCities\Commands\SeedGeoCitiesCommand;

class GeoCitiesServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/migrations/');
        if ($this->app->runningInConsole()) {
            $this->commands(
                [
                    SeedGeoCitiesCommand::class
                ]
            );
        }
    }

}
