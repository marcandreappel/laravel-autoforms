<div class="flex flex-col space-y-4">
    <div class="flex flex-col space-y-1">
        @foreach($fields as $id => $type)
            @livewire('laravel-autoforms::types.'.$type, ['id' => $id])
        @endforeach
    </div>
    <div class="flex flex-col space-y-2">
        <label for="type">{{ __("Ajouter un champ") }}</label>
        <div class="flex flex-row items-center">
            <select wire:model="type" id="type" wire:key="as-{{ $form }}">
                <option value="">{{ __("Veuillez choisir") }}</option>
                <option value="text">{{ __("Champ de texte") }}</option>
                <option value="email">{{ __("Champ d'email") }}</option>
                <option value="textarea">{{ __("Champ texte libre") }}</option>
                <option value="select">{{ __("Sélection") }}</option>
                <option value="radio">{{ __("Choix unique (radio)") }}</option>
                <option value="checkbox">{{ __("Choix multiple (checkbox)") }}</option>
            </select>
            <div wire:click="add" wire:key="ad-{{ $form }}" class="p-2">{{ __("Ajouter champ") }}</div>
        </div>
    </div>
</div>
