<?php

declare(strict_types=1);

namespace Vdlp\HtmlPurifier;

use HTMLPurifier;
use HTMLPurifier_Config;
use October\Rain\Config\Repository;
use October\Rain\Support\ServiceProvider;

class HtmlPurifierServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            $this->getConfigPath() => $this->getConfigPublishPath(),
        ], 'config');
    }

    public function register(): void
    {
        $this->mergeConfigFrom($this->getConfigPath(), 'htmlpurifier');

        $this->app->singleton(HTMLPurifier::class, static function ($app) {
            /** @var Repository $repository */
            $repository = $app['config'];

            $config = HTMLPurifier_Config::create($repository->get('htmlpurifier'));

            return new HTMLPurifier($config);
        });
    }

    private function getConfigPublishPath(): string
    {
        if (function_exists('config_path')) {
            return config_path('htmlpurifier.php');
        }

        return base_path('config/htmlpurifier.php');
    }

    private function getConfigPath(): string
    {
        return __DIR__ . '/config/htmlpurifier.php';
    }
}
