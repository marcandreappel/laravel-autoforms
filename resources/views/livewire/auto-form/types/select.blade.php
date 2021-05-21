<div>
    <label>Intitulé du champ</label>
    <input type="text" wire:model="label"/>

    @foreach($options as $option)
        <input type="text" value="" />
    @endforeach
</div>
