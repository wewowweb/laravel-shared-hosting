<?php

namespace Wewowweb\LaravelSharedHosting;

use Illuminate\Support\ServiceProvider;
use Wewowweb\LaravelSharedHosting\Console\Commands\InstallCommand;

class LaravelSharedHostingServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            InstallCommand::class,
        ]);
    }
}
