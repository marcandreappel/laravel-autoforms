<?php
declare(strict_types=1);

namespace MarcAndreAppel\LaravelAutoForms\Http\Livewire\AutoForm;

use Illuminate\Contracts\View\View;
use Livewire\Component;
use MarcAndreAppel\LaravelAutoForms\Models\Field;
use MarcAndreAppel\LaravelAutoForms\Models\Form;

class Fields extends Component
{
    public string $type = '';
    public string $form = '';
    public array $fields = [];

    protected $listeners = [
        'moveUp'   => 'moveUp',
        'moveDown' => 'moveDown',
        'delete'   => 'delete',
    ];

    public function mount(string $form)
    {
        $this->form = $form;
        $fields = [];
        Form::where('id', $this->form)
            ->firstOrFail()
            ->fields
            ->map(function ($item) use (&$fields) {
                $fields[$item->id] = $item->type;
            });
        $this->fields = $fields;
    }

    public function render(): View
    {
        return view('laravel-autoforms::livewire.auto-form.fields');
    }

    public function delete(string $id)
    {
        Field::where('id', $id)
            ->firstOrFail()
            ->delete();
    }

    public function moveUp(string $id)
    {

    }

    public function moveDown(string $id)
    {

    }

    public function add(int $position = null)
    {
        if (!empty($this->type)) {
            $field = new Field();

            $field->type        = $this->type;
            $field->form_id     = $this->form;
            $field->parameters  = [];
            $field->validations = '';

            $field->save();
            $this->fields[$field->id] = $this->id;
        }
        $this->reset('type');
    }

}
