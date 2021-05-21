<?php
declare(strict_types=1);

namespace MarcAndreAppel\LaravelAutoForms\View\Components;

use Illuminate\Contracts\View\View;

class Checkbox extends Field
{
    public function render(): View
    {
        return view('laravelautoforms::components.checkbox');
    }
}
