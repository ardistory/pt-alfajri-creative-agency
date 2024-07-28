<div>
    <x-header title="Stats" />
    <div class="grid grid-cols-3 gap-5">
        <x-card class="shadow-xl">
            <x-stat title="Total Category" value="{{ $totalCategory }}" icon="phosphor.bookmarks" />
        </x-card>
        <x-card class="shadow-xl">
            <x-stat title="Total Subcategory" value="{{ $totalSubCategory }}" icon="phosphor.bookmark-simple" />
        </x-card>
        <x-card class="shadow-xl">
            <x-stat title="Total Produk" value="{{ $totalProduct }}" icon="phosphor.package" />
        </x-card>
    </div>
    <x-header title="Produk" class="mt-10">
        <x-slot:middle class="!justify-end">
            <x-input icon="phosphor.magnifying-glass" placeholder="Cari produk" wire:model.live.debounce="search" />
        </x-slot:middle>
        <x-slot:actions>
            <x-button icon="o-plus" class="btn-primary" @click="$wire.showDrawerAdd = true" />
        </x-slot:actions>
    </x-header>
    @if (count($products) > 0)
        <x-card class="shadow-xl">
            <x-table :headers="$headersProduct" :rows="$products" striped with-pagination>
                @scope('cell_id', $product)
                    {{ $loop->index + 1 }}
                @endscope

                @scope('cell_name', $product)
                    <span class="text-xs font-bold">{{ $product->name }}</span>
                @endscope

                @scope('cell_description', $product)
                    <div class="text-xs max-w-40">{{ $product->description }}</div>
                @endscope

                @scope('cell_img', $product)
                    <img src="{{ asset('storage/img-product/' . $product->img) }}" alt="{{ $product->img }}"
                        class="w-24 h-auto rounded-lg">
                @endscope

                @scope('cell_category_name', $product)
                    <span class="text-xs font-bold">{{ $product->category_name }}</span>
                @endscope

                @scope('cell_subcategory_name', $product)
                    <span class="text-xs font-bold">{{ $product->subcategory_name }}</span>
                @endscope

                @scope('actions', $product)
                    <div class="flex gap-2">
                        <x-button icon="phosphor.pencil" wire:click="edit({{ $product->id }})" spinner="edit"
                            class="btn-sm btn-primary text-white" />
                        <x-button icon="o-trash" wire:click="delete({{ $product->id }})" spinner="delete"
                            class="btn-sm btn-primary text-white" />
                    </div>
                @endscope
            </x-table>
        </x-card>
    @else
        <x-alert title="Produk tidak ditemukan!" description="silahkan coba key lain" icon="o-exclamation-triangle"
            class="bg-base-100 border-none">
            <x-slot:actions>
                <x-button label="Clear filters" wire:click="clear" icon="o-x-mark" spinner />
            </x-slot:actions>
        </x-alert>
    @endif

    <x-drawer wire:model="showDrawerAdd" class="w-11/12 lg:w-1/3">
        <x-form wire:submit="save" no-separator>
            <x-input label="Nama Produk" wire:model="name" />
            <x-input label="Deskripsi Produk" wire:model="name" />
            <x-file wire:model="file" label="Gambar" />
            <x-select label="Category" :options="$listCategory" option-value="slug" option-label="name"
                icon="phosphor.bookmarks" wire:model.live="categoryProduct" />
            <x-select label="SubCategory" :options="$listSubCategory" option-value="slug" option-label="name"
                icon="phosphor.bookmark-simple" wire:model="subCategoryProduct" />
            <x-slot:actions>
                <x-button label="Tambah Produk" class="btn-primary" type="submit" spinner="save" />
            </x-slot:actions>
        </x-form>
    </x-drawer>
</div>
