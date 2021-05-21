<?php
declare(strict_types=1);

namespace MarcAndreAppel\LaravelAutoForms\View\Components;

use Illuminate\Contracts\View\View;

abstract class Input extends Field
{
    public string $type;

    public function render(): View
    {
        return view('laravelautoforms::components.input');
    }
}
