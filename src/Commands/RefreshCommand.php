<?php

namespace NovaResponsiveTheme\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class RefreshCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nova:responsive-theme:refresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Artisan::call('vendor:publish', [
           '--provider' => \NovaResponsiveTheme\ThemeServiceProvider::class,
           '--tag'      => 'public',
           '--force'    => true,
        ]);

        return 0;
    }
}
