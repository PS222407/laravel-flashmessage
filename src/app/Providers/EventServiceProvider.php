<?php

namespace Jensramakers\app\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Jensramakers\app\View\Components\FlashMessage;

class EventServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'Jensramakers');
        Blade::component('package-alert', FlashMessage::class);
    }
}
