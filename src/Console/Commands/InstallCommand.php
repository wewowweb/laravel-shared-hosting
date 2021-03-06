<?php

namespace Wewowweb\LaravelSharedHosting\Console\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var signature string
     */
    protected $signature = 'shared:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Laravel Shared Hosting package';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        copy(__DIR__.'/../../stubs/index.php', public_path('index.php'));
        $this->info('Laravel Shared Hosting was installed successfully.');
    }
}
