<?php

namespace NovaResponsiveTheme;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;
use NovaResponsiveTheme\Commands\RefreshCommand;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::booted(function () {
            $version = config('nova-responsive-theme.version', '0.0.1');
            foreach (config('nova-responsive-theme.css.files', []) as $themeFile) {
                Nova::theme(str_starts_with($themeFile, 'http') ? $themeFile : (asset($themeFile) . "?v=$version"));
            }

            if ($themeFile = config('nova-responsive-theme.css.include_theme')) {
                Nova::theme(str_starts_with($themeFile, 'http') ? $themeFile : (asset($themeFile) . "?v=$version"));
            }
        });

        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-fmc-responsive-theme', __DIR__ . '/../dist/js/theme.js');

            foreach (config('nova-responsive-theme.js.files', []) as $index => $themeFile) {
                Nova::script('nova-fmc-responsive-theme-additional-' . $index, $themeFile);
            }
        });

        $this->publishes([
            __DIR__ . '/../dist/css' => public_path('vendor/nova/responsive-theme/css'),
        ], 'public');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/nova-responsive-theme.php' => config_path('nova-responsive-theme.php'),
            ], 'config');

            $this->commands([
                RefreshCommand::class,
            ]);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/nova-responsive-theme.php', 'nova-responsive-theme');
    }
}
