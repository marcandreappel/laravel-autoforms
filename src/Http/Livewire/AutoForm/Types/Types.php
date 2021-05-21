<?php
declare(strict_types=1);

namespace MarcAndreAppel\LaravelAutoForms\Http\Livewire\AutoForm\Types;

use Livewire\Component;
use MarcAndreAppel\LaravelAutoForms\Models\Field;

abstract class Types extends Component
{
    public string $label = '';
    public array $field;

    public function mount(string $id)
    {
        $field = Field::where('id', $id)
            ->firstOrFail()
            ->toArray();
        $this->field = $field;
    }

}
