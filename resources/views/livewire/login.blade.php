<div
    class="h-screen flex justify-center items-center before:w-80 before:h-80 before:rounded-full before:bg-white before:absolute before:left-[50%] before:top-[50%] before:-translate-x-[50%] before:-translate-y-[50%] before:blur-[150px]">
    <x-card class="shadow-xl shadow-white bg-gray-900 border">
        <x-form wire:submit="login" no-separator>
            <x-input label="Email" wire:model="email" icon="phosphor.user" />
            <x-input label="Password" wire:model="password" type="password" icon="phosphor.lock-simple" />

            <x-slot:actions>
                <x-button label="Login" class="btn-primary" type="submit" spinner="login"
                    icon-right="phosphor.arrow-circle-right" />
            </x-slot:actions>
        </x-form>
    </x-card>
</div>
