<?php

namespace Wewowweb\LaravelSharedHosting;

use Illuminate\Support\ServiceProvider;
use Wewowweb\LaravelSharedHosting\Console\Commands\InstallCommand;

class LaravelSharedHostingServiceProvider extends ServiceProvider
{
    protected $commands = [
        InstallCommand::class,
    ];

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // Registering package commands.
        if ($this->app->runningInConsole()) {
            $this->commands(
                $this->commands
            );
        }
    }

    public function register()
    {
        $this->commands([
            InstallCommand::class,
        ]);
    }
}
