<?php
declare(strict_types=1);

namespace MarcAndreAppel\LaravelAutoForms\View\Components;

use Illuminate\Contracts\View\View;

class Select extends Field
{
    public bool $isMultiple = false;

    public function render(): View
    {
        return view('laravelautoforms::components.select');
    }
}
