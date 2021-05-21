<div class="flex flex-row items-center space-x-4 w-full border border-gray-200 bg-gray-100 rounded-md p-4">
    <div class="flex flex-grow">
        {{ $slot }}
    </div>
    <div class="flex justify-center items-center w-12">
        <div wire:click="$emitUp('delete', '{{ $id }}')" wire:key="dl-{{ $id }}" class="cursor-pointer">
            <span class="text-2xl text-red-800 fas fa-trash-alt"></span>
        </div>
    </div>
    <div class="flex justify-center items-center w-12">
        <div wire:loading>
            <span class="text-red-700 text-4xl fad fa-spinner-third fa-spin"></span>
        </div>
    </div>
    <div class="flex flex-col justify-end space-y-2">
        <div class="" wire:click="$emitUp('moveUp', '{{ $id }}')" wire:key="mu-{{ $id }}">
            <span class="fas fa-arrow-alt-up cursor-pointer"></span>
        </div>
        <div wire:click="$emitUp('moveDown', '{{ $id }}')" wire:key="md-{{ $id }}">
            <span class="fas fa-arrow-alt-down cursor-pointer"></span>
        </div>
    </div>
</div>
