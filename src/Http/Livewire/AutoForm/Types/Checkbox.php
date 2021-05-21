<?php
declare(strict_types=1);

namespace MarcAndreAppel\LaravelAutoForms\Http\Livewire\AutoForm\Types;

use Illuminate\Contracts\View\View;

class Checkbox extends Types
{
    public array $checkboxes = [];

    public function render(): View
    {
        return view('laravel-autoforms::livewire.auto-form.types.checkbox');
    }
}
