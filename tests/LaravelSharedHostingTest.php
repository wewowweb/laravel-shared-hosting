<?php

namespace Wewowweb\LaravelSharedHosting\Tests;

use Illuminate\Support\Facades\Artisan;
use Orchestra\Testbench\TestCase;
use Wewowweb\LaravelSharedHosting\LaravelSharedHostingServiceProvider;
class LaravelSharedHostingTest extends TestCase
{
     protected function getPackageProviders($app)
     {
         return [
             LaravelSharedHostingServiceProvider::class
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