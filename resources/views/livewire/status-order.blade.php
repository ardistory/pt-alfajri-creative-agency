<div class="mt-10 mb-16 flex justify-center">
    <x-form wire:submit="save" no-separator>
        <x-input label="Nomor Invoice" class="input-error dark:input-primary" placeholder="OL-1995" wire:model="name" />
        <x-input label="Nomor Handphone" class="input-error dark:input-primary" placeholder="081234567890"
            wire:model="name" />

        <x-slot:actions>
            <x-button label="CEK STATUS ORDER" icon="phosphor.magnifying-glass"
                class="btn-error dark:btn-primary text-white dark:text-black rounded-none" type="submit"
                spinner="save" />
        </x-slot:actions>
    </x-form>
</div>
