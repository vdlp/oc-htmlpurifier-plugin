<?php

/** @noinspection PhpMissingParentCallCommonInspection */

declare(strict_types=1);

namespace Vdlp\HtmlPurifier;

use HTMLPurifier;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails(): array
    {
        return [
            'name' => 'vdlp.htmlpurifier::lang.plugin.name',
            'description' => 'vdlp.htmlpurifier::lang.plugin.description',
            'author' => 'Van der Let & Partners <octobercms@vdlp.nl>',
            'icon' => 'icon-leaf',
            'homepage' => 'https://github.com/vdlp/oc-htmlpurifier-plugin',
        ];
    }

    public function boot(): void
    {
        $this->app->register(HtmlPurifierServiceProvider::class);
    }

    public function registerMarkupTags(): array
    {
        return [
            'filters' => [
                'purify' => function ($html) {
                    /** @var HTMLPurifier $purifier */
                    $purifier = $this->app->make(HTMLPurifier::class);
                    return $purifier->purify($html);
                },
            ],
        ];
    }
}
