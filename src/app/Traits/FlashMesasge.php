<?php

namespace Jensramakers\LaravelFlashmessage\app\Traits;

use Jensramakers\LaravelFlashmessage\app\Enums\FlashType;
use Illuminate\Support\Facades\Session;

trait FlashMesasge
{
    /**
     * Creates a flash message in session
     * @param $status (true = success, false = error)
     * @param string $type create, update or destroy
     * @return void
     */
    public function flashMessage($status, string $type): void
    {
        $message = $status ? 'success' : 'error';

        $text = match ($type) {
            'create', 'update', 'destroy' => trans('admin.message_' . $type . '_' . $message),
            default => $type,
        };

        Session::flash('message', $text);
        Session::flash('type', $message);
    }

    public function flashCustomMessage(FlashType $type, string $message)
    {
        Session::flash('message', $message);
        Session::flash('type', $type->value);
    }
}
