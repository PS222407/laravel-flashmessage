<?php

namespace Jensramakers\LaravelFlashmessage;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Jensramakers\LaravelFlashmessage\app\View\Components\FlashMessage;
use Jensramakers\LaravelFlashmessage\app\View\Components\form\error;

class LaravelFlashmessageServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views/components', 'laravel-flashmessage');
        $this->loadViewsFrom(__DIR__ . '/resources/views/components/form', 'laravel-flashmessage');

        Blade::component(FlashMessage::class, 'flash-message');
        Blade::component(error::class, 'form-error');
    }
}
