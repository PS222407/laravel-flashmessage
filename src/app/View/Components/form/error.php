<?php

namespace Jensramakers\LaravelFlashmessage\app\View\Components\form;

use Illuminate\View\Component;

class error extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('laravel-flashmessage::form.error');
    }
}
