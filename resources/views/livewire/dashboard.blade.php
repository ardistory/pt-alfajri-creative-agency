<div>
    <x-header title="Stats" />
    <div class="grid grid-cols-3 gap-5">
        <x-card class="shadow-md">
            <x-stat title="Total Category" value="{{ $totalCategory }}" icon="o-envelope" />
        </x-card>
        <x-card class="shadow-md">
            <x-stat title="Total Subcategory" value="{{ $totalSubCategory }}" icon="o-envelope" />
        </x-card>
        <x-card class="shadow-md">
            <x-stat title="Total Product" value="{{ $totalProduct }}" icon="o-envelope" />
        </x-card>
    </div>
    <x-header title="List Produk" class="mt-10" />
    <x-card class="shadow-lg">
        <x-table :headers="$headers" :rows="$products" striped>
            @scope('cell_id', $product)
                {{ $loop->index + 1 }}
            @endscope

            @scope('actions', $product)
                <x-button icon="o-trash" wire:click="delete({{ $product->id }})" spinner class="btn-sm" />
            @endscope
        </x-table>
    </x-card>
</div>
