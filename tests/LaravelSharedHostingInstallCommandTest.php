<?php

namespace Wewowweb\LaravelSharedHosting\Tests;

use Orchestra\Testbench\TestCase;
use Illuminate\Support\Facades\Artisan;
use Wewowweb\LaravelSharedHosting\LaravelSharedHostingServiceProvider;

class LaravelSharedHostingInstallCommandTest extends TestCase
{
    /** Overrides the getPackageProviders
     *  to load the custom package service provider
     *  for Orchestra Testbench */
    
    protected function getPackageProviders($app)
    {
        return [
             LaravelSharedHostingServiceProvider::class,
         ];
    }

    /** @test */
    public function test_console_install_command()
    {
        $this->withoutMockingConsoleOutput();

        $this->artisan('shared:install');

        $output = Artisan::output();

        $this->assertEquals('Laravel Shared Hosting was installed successfully.'.PHP_EOL, $output);
    }
}
