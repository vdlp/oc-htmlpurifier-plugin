<?php

namespace Vdlp\HtmlPurifier;

use App;
use HTMLPurifier;
use System\Classes\PluginBase;

/**
 * Class Plugin
 *
 * @package Vdlp\HtmlPurifier
 */
class Plugin extends PluginBase
{
    /**
     * {@inheritdoc}
     */
    public function pluginDetails()
    {
        return [
            'name' => 'vdlp.htmlpurifier::lang.plugin.name',
            'description' => 'vdlp.htmlpurifier::lang.plugin.description',
            'author' => 'Van der Let & Partners <octobercms@vdlp.nl>',
            'icon' => 'icon-leaf',
            'homepage' => 'https://github.com/vdlp/oc-htmlpurifier-plugin',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        App::register(HtmlPurifierServiceProvider::class);
    }

    /**
     * {@inheritdoc}
     */
    public function registerMarkupTags()
    {
        return [
            'filters' => [
                'purify' => function ($html) {
                    /** @var HTMLPurifier $purifier */
                    $purifier = App::make(HTMLPurifier::class);
                    return $purifier->purify($html);
                },
            ],
        ];
    }
}
