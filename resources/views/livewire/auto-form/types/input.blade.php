<div>
    <x-laravel-autoforms::layouts.field-container :id="$field['id']">
        <div class="flex flex-col">
            <div class="flex flex-row">
                <h4 class="text-lg font-semibold">{{ ucfirst($localized) }}</h4>
            </div>
            <div class="flex flex-row space-x-2">
                <div class="flex flex-col">
                    <label>Intitulé du champ</label>
                    <input type="text" wire:model="label"/>
                </div>
                VARIABLES
            </div>
        </div>
    </x-laravel-autoforms::layouts.field-container>
</div>
