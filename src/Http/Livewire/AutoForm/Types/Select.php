<?php
declare(strict_types=1);

namespace MarcAndreAppel\LaravelAutoForms\Http\Livewire\AutoForm\Types;

use Illuminate\Contracts\View\View;

class Select extends Types
{
    public bool $isMultiple = false;
    public array $options = [];

    public function render(): View
    {
        return view('laravel-autoforms::livewire.auto-form.types.select');
    }
}
