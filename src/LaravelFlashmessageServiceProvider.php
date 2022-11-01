<?php

namespace Jensramakers\LaravelFlashmessage;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Jensramakers\LaravelFlashmessage\app\View\Components\FlashMessage;

class LaravelFlashmessageServiceProvider extends ServiceProvider
{
    private const PATH_VIEWS = __DIR__ . '../resources/views/';

    public function register()
    {
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views/components', 'laravel-flashmessage');

        Blade::component(FlashMessage::class, 'flash-message');
    }
}
