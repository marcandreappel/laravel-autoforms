<div>
    <label>Intitulé du champ</label>
    <input type="text" wire:model="label"/>

    @foreach($radios as $radio)
        <input type="text" value="" />
    @endforeach
</div>
