<div>
    <x-header title="Stats" separator />
    <div class="grid grid-cols-4 gap-5">
        <x-card class="shadow-xl col-span-5 md:col-span-1">
            <x-stat title="Total Order" value="{{ $totalOrderProduct['totalOrder'] }}" icon="phosphor.shopping-cart" />
        </x-card>
        <x-card class="shadow-xl col-span-5 md:col-span-1">
            <x-stat title="Order Tahap 1" value="{{ $totalOrderProduct['totalTahap1'] }}"
                icon="phosphor.number-circle-one" />
        </x-card>
        <x-card class="shadow-xl col-span-5 md:col-span-1">
            <x-stat title="Order Tahap 2" value="{{ $totalOrderProduct['totalTahap2'] }}"
                icon="phosphor.number-circle-two" />
        </x-card>
        <x-card class="shadow-xl col-span-5 md:col-span-1">
            <x-stat title="Order Tahap 3" value="{{ $totalOrderProduct['totalTahap3'] }}"
                icon="phosphor.number-circle-three" />
        </x-card>
    </div>
    <x-header title="Order Produk" class="mt-10" separator>
        <x-slot:middle class="!justify-end">
            <x-input icon="phosphor.magnifying-glass" placeholder="Cari Invoice" wire:model.live.debounce="search"
                clearable />
        </x-slot:middle>
        <x-slot:actions>
            <x-button icon="o-plus" class="btn-primary" @click="$wire.showDrawerAdd = true" />
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
            <x-input label="Nomor Resi (Jika Barang Dikirim)" value="{{ $orderEdit['no_resi'] ?? '' }}" disabled />
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
</div>
