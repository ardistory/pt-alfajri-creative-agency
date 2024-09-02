<div>
    <x-header title="Stats" separator />
    <div class="grid grid-cols-6 gap-5">
        <x-card class="shadow-xl col-span-6 md:col-span-1">
            <x-stat title="Total Order" value="{{ $totalOrderProduct['totalOrder'] }}" icon="phosphor.shopping-cart" />
        </x-card>
        <x-card class="shadow-xl col-span-6 md:col-span-1">
            <x-stat title="Order Tahap 1" value="{{ $totalOrderProduct['totalTahap1'] }}"
                icon="phosphor.number-circle-one" />
        </x-card>
        <x-card class="shadow-xl col-span-6 md:col-span-1">
            <x-stat title="Order Tahap 2" value="{{ $totalOrderProduct['totalTahap2'] }}"
                icon="phosphor.number-circle-two" />
        </x-card>
        <x-card class="shadow-xl col-span-6 md:col-span-1">
            <x-stat title="Order Tahap 3" value="{{ $totalOrderProduct['totalTahap3'] }}"
                icon="phosphor.number-circle-three" />
        </x-card>
        <x-card class="shadow-xl col-span-6 md:col-span-1">
            <x-stat title="Order Tahap 4" value="{{ $totalOrderProduct['totalTahap4'] }}"
                icon="phosphor.number-circle-four" />
        </x-card>
        <x-card class="shadow-xl col-span-6 md:col-span-1">
            <x-stat title="Order Batal" value="{{ $totalOrderProduct['totalTahap5'] }}" icon="phosphor.x" />
        </x-card>
    </div>
    <x-header title="Order Produk" class="mt-10" separator>
        <x-slot:middle class="!justify-end">
            <x-input icon="phosphor.magnifying-glass" placeholder="Cari Invoice"
                wire:model.live.debounce="searchNoInvoice" clearable />
        </x-slot:middle>
        <x-slot:actions>
            <x-button label="Add" icon="o-plus"
                class="bg-gradient-to-bl from-error to-warning hover:ring hover:ring-primary text-white"
                @click="$wire.showDrawerAdd = true" />
            <x-button label="Filters" icon="phosphor.funnel"
                class="bg-gradient-to-br from-error to-primary hover:ring hover:ring-primary text-white"
                @click="$wire.showDrawerFilter = true" />
        </x-slot:actions>
    </x-header>
    @if (count($orderProducts) > 0)
        <x-card class="shadow-xl">
            <x-table :headers="$headers" :rows="$orderProducts" striped with-pagination>
                @scope('cell_id', $order)
                    {{ $loop->index + 1 }}
                @endscope

                @scope('cell_name', $order)
                    <span class="text-xs font-bold">{{ $order->name }}</span>
                @endscope

                @scope('cell_detail_order', $order)
                    <a class="text-blue-500" href="https://get.paper.id/{{ $order->detail_order }}"
                        target="_blank">get.paper.id/{{ $order->detail_order }}</a>
                @endscope

                @scope('cell_tahap', $order)
                    @if ($order->tahap == 5)
                        <span class="text-white bg-red-500 px-2 rounded-full ring ring-red-200">Batal</span>
                    @else
                        <span>{{ $order->tahap }}</span>
                    @endif
                @endscope

                @scope('actions', $order)
                    <div class="flex gap-2">
                        <x-button icon="phosphor.pencil-simple" wire:click="edit({{ $order->id }})"
                            class="btn-sm btn-primary text-white" />
                        <x-button icon="phosphor.trash" wire:click="delete({{ $order->id }})"
                            class="btn-sm btn-error text-white" />
                    </div>
                @endscope
            </x-table>
        </x-card>
    @else
        <x-alert title="Order produk tidak ditemukan!" description="silahkan coba kata kunci lain"
            icon="o-exclamation-triangle" class="bg-base-100 border-none shadow-xl">
            <x-slot:actions>
                <x-button label="Clear filters" wire:click="clear" icon="o-x-mark" spinner />
            </x-slot:actions>
        </x-alert>
    @endif

    <x-drawer wire:model="showDrawerEdit" class="w-11/12 lg:w-1/3">
        <x-form wire:submit="editOrder({{ $orderEdit['id'] ?? '' }})" no-separator>
            <x-input label="Nomor Invoice" value="{{ $orderEdit['no_invoice'] ?? '' }}" disabled />
            <x-input label="Tanggal Order" value="{{ $orderEdit['tgl_order1'] ?? '' }}" disabled />
            <x-input label="Nama" value="{{ $orderEdit['name'] ?? '' }}" disabled />
            <x-input label="Nomor Handphone" value="{{ $orderEdit['no_hp'] ?? '' }}" disabled />
            <x-input label="Detail Order" prefix="get.paper.id/" value="{{ $orderEdit['detail_order'] ?? '' }}"
                disabled />
            <x-input label="Nomor Resi (Jika Barang Dikirim)" value="{{ $orderEdit['no_resi'] ?? '' }}" />
            <x-select label="Tahap" :options="$tahap" option-value="value" option-label="desc"
                placeholder="Update tahap" placeholder-value="0" icon="phosphor.stairs" wire:model='editTahap' />
            <x-slot:actions>
                <x-button label="Edit Order" class="btn-primary" type="submit" spinner="editOrder" />
            </x-slot:actions>
        </x-form>
    </x-drawer>

    <x-drawer wire:model="showDrawerAdd" class="w-11/12 lg:w-1/3" right>
        <x-form wire:submit="addOrder" no-separator>
            <x-input label="Nomor Invoice" wire:model.live="noInvoice" clearable />
            <x-input label="Nama" wire:model.live="name" />
            <x-input label="Nomor Handphone" wire:model="noHandphone" clearable />
            <x-input label="Detail Order" prefix="get.paper.id/" wire:model.live="detailOrder" />
            <x-input label="Nomor Resi (Jika Barang Dikirim)" wire:model.live="noResi" />
            <x-slot:actions>
                <x-button label="Tambah Order" class="btn-primary" type="submit" spinner="addOrder" />
            </x-slot:actions>
        </x-form>
    </x-drawer>

    <x-drawer wire:model="showDrawerFilter" title="Filters" right separator with-close-button class="lg:w-1/3">
        <x-form>
            <x-input label="Nomor Invoice" wire:model.live.debounce="searchNoInvoice" icon="o-magnifying-glass"
                @keydown.enter="$wire.showDrawerFilter = false" />
            <x-datetime label="Tanggal Order" wire:model.live="searchTglOrder" icon="o-calendar" />
            <x-input label="Nama" wire:model.live.debounce="searchName" icon="o-magnifying-glass"
                @keydown.enter="$wire.showDrawerFilter = false" />
            <x-input label="Nomor HP" wire:model.live.debounce="searchNoHp" icon="o-magnifying-glass"
                @keydown.enter="$wire.showDrawerFilter = false" />
            <x-input label="Nomor Resi" wire:model.live.debounce="searchNoResi" icon="o-magnifying-glass"
                @keydown.enter="$wire.showDrawerFilter = false" />
        </x-form>

        <x-slot:actions>
            <x-button label="Reset" icon="o-x-mark" wire:click="clear" spinner />
            <x-button label="Done" icon="o-check" class="btn-primary"
                x-on:click="$wire.showDrawerFilter = false" />
        </x-slot:actions>
    </x-drawer>
</div>
