<div>
    {{-- metodos magicos $set('open', true)  --}}
    <x-danger-button style="padding-top: 12px;" wire:click="$set('open', true)">
        Crear nuevo Post
    </x-danger-button>


    <x-dialog-modal wire:model="open">

        <x-slot name='title'>
            Crear nuevo post
        </x-slot>

        <x-slot name='content'>
            <div class="mb-4">
                <x-label value="Título del post"></x-label>
                <x-input type="text" class="w-full" wire:model.defer="title" />
                @error('title') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <x-label value="Contenido del post"></x-label>
                <textarea  wire:model.defer="content" class="form-control w-full" rows="6"></textarea>
                @error('content') <span class="error">{{ $message }}</span> @enderror
            </div>

        </x-slot>

        <x-slot name='footer'>
            <x-secondary-button class="mr-2" wire:click="$set('open', false)">
                Cancelar
            </x-secondary-button>

            <x-danger-button wire:click="save">
                Crear Post
            </x-danger-button>

        </x-slot>

    </x-dialog-modal>
</div>
