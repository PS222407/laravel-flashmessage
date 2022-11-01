<?php

namespace Jensramakers\LaravelFlashmessage\app\Enums;

enum FlashType: string
{
    case ERROR = 'error';
    case INFO = 'info';
    case WARNING = 'warning';
    case SUCCESS = 'success';
}
