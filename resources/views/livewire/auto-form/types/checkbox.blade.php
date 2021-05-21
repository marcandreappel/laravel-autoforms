<div>
    <x-laravel-autoforms::field-container>
    <label>Intitulé du champ</label>
    <input type="text" wire:model="label"/>

    @foreach($checkboxes as $checkbox)
        <input type="checkbox" value="" />
    @endforeach
    </x-laravel-autoforms::field-container>
</div>
