<?php
declare(strict_types=1);

namespace MarcAndreAppel\LaravelAutoForms\Http\Livewire\AutoForm\Types;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;

abstract class Input extends Types
{
    public string $type;

    public function render(): View
    {
        $localized = $this->localizedType();

        return view('laravel-autoforms::livewire.auto-form.types.input', compact('localized'));
    }

    public function localizedType()
    {
        $translations = [
            'email' => __("email"),
            'text' => __("texte"),
        ];

        return Arr::get($translations, $this->type, $this->type);
    }
}
