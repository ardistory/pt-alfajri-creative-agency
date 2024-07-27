<div>
    <div class="grid grid-cols-3 gap-5 px-5 py-5">
        <x-card class="shadow-md">
            <x-stat title="Total Category" value="44" icon="o-envelope" />
        </x-card>
        <x-card class="shadow-md">
            <x-stat title="Total Subcategory" value="44" icon="o-envelope" />
        </x-card>
        <x-card class="shadow-md">
            <x-stat title="Total Product" value="44" icon="o-envelope" />
        </x-card>
    </div>
    <x-hr />
    {{-- <x-table :headers="$headers" :rows="$users" striped @row-click="alert($event.detail.name)" /> --}}
</div>
