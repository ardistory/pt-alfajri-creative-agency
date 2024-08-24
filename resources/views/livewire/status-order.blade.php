<div class="flex flex-col justify-center items-center min-h-svh">
    <div class="@if ($isValid) hidden @else @endif">
        <p class="text-red-600 text-center dark:text-white text-xl font-bold">
            STATUS ORDER</p>
        <x-form wire:submit="checkOrder" class="mt-5 w-96" no-separator>
            <x-input label="Nomor Invoice" class="input-error border-black/80 dark:input-primary" placeholder="OL-1995"
                wire:model="noInvoice" />
            <x-input label="Nomor Handphone" class="input-error border-black/80 dark:input-primary"
                placeholder="082123131995" wire:model="noHandphone" />

            <x-slot:actions>
                <x-button label="CEK STATUS ORDER"
                    class="w-full mt-9 btn-error bg-red-600 dark:bg-primary dark:btn-primary text-white dark:text-black rounded-none"
                    type="submit" spinner="checkOrder" />
            </x-slot:actions>
        </x-form>
    </div>
    <div class="w-4/5 @if ($isValid) @else hidden @endif">
        <div class="bg-red-700 dark:bg-primary text-white px-6 py-2 flex items-center gap-3">
            <x-button class="btn-circle btn-sm bg-red-950 dark:bg-blue-950 text-white border-none hover:bg-red-800"
                icon="phosphor.arrow-left" wire:click='resetPage' responsive />
            <p class="font-semibold text-xl">ORDER TRACKING</p>
        </div>
        <div class="p-6 grid grid-cols-6 md:grid-cols-5">
            <div class="text-xs font-semibold space-y-3 col-span-3 md:col-span-1">
                <p>Nomor Invoice</p>
                <p>Tanggal Order</p>
                <p>Nama Pemesan</p>
                <p>Nomor Handphone</p>
                <p>Detail Order</p>
                <p class="relative">
                    No Resi
                <p class="text-[11px] absolute -translate-y-4">*(Jika Barang Dikirim)</p>
                </p>
            </div>
            <div class="text-xs font-semibold space-y-3 col-span-3 md:col-span-4">
                <p class="before:content-[':'] before:mr-1">{{ $orderProduct['no_invoice'] ?? '' }}</p>
                <p class="before:content-[':'] before:mr-1">{{ $orderProduct['formattedDate1'] ?? '' }}</p>
                <p class="before:content-[':'] before:mr-1">{{ $orderProduct['name'] ?? '' }}</p>
                <p class="before:content-[':'] before:mr-1">{{ $orderProduct['no_hp'] ?? '' }}</p>
                <p class="before:content-[':'] before:mr-1"><a class="underline text-blue-400"
                        href="https://get.paper.id/{{ $orderProduct['detail_order'] ?? '' }}"
                        target="_blank">get.paper.id/{{ $orderProduct['detail_order'] ?? '' }}</a></p>
                <p class="before:content-[':'] before:mr-1">{{ $orderProduct['no_resi'] ?? '-' }}</p>
            </div>
        </div>
        <div class="px-6 py-2 flex items-center gap-3 border-b-2 border-black/50">
            <p class="font-bold text-xl">STATUS PESANAN</p>
        </div>
        <div class="p-6 translate-x-10 md:translate-x-20 mt-5">
            {{-- 1 --}}
            @isset($orderProduct['tahap'])
                <div class="@if ($orderProduct['tahap'] < 4 && $orderProduct['tahap'] > 0) @else hidden @endif">
                    <!-- Last item `border cut` -->
                    <div @class([
                        'border-s-2 border-s-red-600 h-5 -mb-5' => false, //last
                        '!border-s-primary' => false, //pending
                    ])>
                    </div>

                    <!-- WRAPPER THAT ALSO ACTS A LINE CONNECTOR -->
                    <div @class([
                        'border-s-2 border-s-red-600 dark:border-s-primary ps-8 py-3',
                        '!border-s-primary' => false, //pending
                        'pt-0' => true, //first
                        '!border-s-0' => false, //last
                    ])>
                        <!-- BULLET -->
                        <div>
                            <x-icon name="phosphor.paint-brush"
                                class="w-9 h-9 text-red-600 dark:text-primary absolute -translate-x-24" />
                            <div @class([
                                'w-4 h-4 -mb-5 -ms-[41px] rounded-full bg-red-600 dark:bg-primary text-white',
                                'bg-primary' => false, //pending
                                '!-ms-[39px]' => true, //last
                                'w-8 h-8 !-ms-[48px] -mb-7' => true, //icon
                            ])>
                                <!-- ICON PENDING-->
                                <x-mary-icon name="phosphor.check" class="ms-[2px] mt-[2px] w-7 h-7" />
                            </div>
                        </div>

                        <!-- TITLE -->
                        <div @class(['font-bold mb-1 text-red-600 dark:text-primary'])>
                            {{ $orderProduct['formattedDate1'] ?? '' }}
                        </div>

                        <!-- SUBTITLE -->
                        <div class="text-xs text-gray-500/50 font-bold">
                            <p class="md:absolute md:translate-x-96">{{ $orderProduct['formattedTime1'] ?? '' }}</p>
                        </div>

                        <!-- DESCRIPTION -->
                        <div class="text-xs font-semibold mt-2">
                            Pesanan Anda Sedang Proses Desain / Setting
                        </div>
                    </div>
                </div>
                {{-- 2 --}}
                <div class="@if ($orderProduct['tahap'] < 4 && $orderProduct['tahap'] > 1) @else hidden @endif">
                    <!-- Last item `border cut` -->
                    <div @class([
                        'border-s-2 border-s-red-600 h-5 -mb-5' => false, //last
                        '!border-s-primary' => false, //pending
                    ])>
                    </div>

                    <!-- WRAPPER THAT ALSO ACTS A LINE CONNECTOR -->
                    <div @class([
                        'border-s-2 border-s-red-600 dark:border-s-primary ps-8 py-3',
                        '!border-s-primary' => false, //pending
                        'pt-0' => true, //first
                        '!border-s-0' => false, //last
                    ])>
                        <!-- BULLET -->
                        <div>
                            <x-icon name="phosphor.gear"
                                class="w-9 h-9 text-red-600 dark:text-primary absolute -translate-x-24" />
                            <div @class([
                                'w-4 h-4 -mb-5 -ms-[41px] rounded-full bg-red-600 dark:bg-primary text-white',
                                'bg-primary' => false, //pending
                                '!-ms-[39px]' => false, //last
                                'w-8 h-8 !-ms-[48px] -mb-7' => true, //icon
                            ])>
                                <!-- ICON PENDING-->
                                <x-mary-icon name="phosphor.check" class="ms-[2px] mt-[2px] w-7 h-7" />
                            </div>
                        </div>

                        <!-- TITLE -->
                        <div @class(['font-bold mb-1 text-red-600 dark:text-primary'])>
                            {{ $orderProduct['formattedDate2'] ?? '' }}
                        </div>

                        <!-- SUBTITLE -->
                        <div class="text-xs text-gray-500/50 font-bold">
                            <p class="md:absolute md:translate-x-96">{{ $orderProduct['formattedTime2'] ?? '' }}</p>
                        </div>

                        <!-- DESCRIPTION -->
                        <div class="text-xs font-semibold mt-2">
                            Pesanan Anda Sedang Proses Produksi
                        </div>
                    </div>
                </div>
                {{-- 3 --}}
                <div class="@if ($orderProduct['tahap'] < 4 && $orderProduct['tahap'] > 2) @else hidden @endif">
                    <!-- Last item `border cut` -->
                    <div @class([
                        'border-s-2 border-s-base-300 h-5 -mb-5' => true, //last
                        '!border-s-primary' => false, //pending
                    ])>
                    </div>

                    <!-- WRAPPER THAT ALSO ACTS A LINE CONNECTOR -->
                    <div @class([
                        'border-s-2 border-s-base-300 ps-8 py-3',
                        '!border-s-primary' => false, //pending
                        'pt-0' => true, //first
                        '!border-s-0' => true, //last
                    ])>
                        <!-- BULLET -->
                        <div>
                            <x-icon name="phosphor.package"
                                class="w-9 h-9 text-red-600 dark:text-primary absolute -translate-x-24" />
                            <div @class([
                                'w-4 h-4 -mb-5 -ms-[41px] rounded-full bg-red-600 dark:bg-primary text-white',
                                'bg-primary' => false, //pending
                                '!-ms-[39px]' => true, //last
                                'w-8 h-8 !-ms-[48px] -mb-7' => true, //icon
                            ])>
                                <!-- ICON PENDING-->
                                <x-mary-icon name="phosphor.check" class="ms-[2px] mt-[2px] w-7 h-7" />
                            </div>
                        </div>

                        <!-- TITLE -->
                        <div @class(['font-bold mb-1 text-red-600 dark:text-primary'])>
                            {{ $orderProduct['formattedDate3'] ?? '' }}
                        </div>

                        <!-- SUBTITLE -->
                        <div class="text-xs text-gray-500/50 font-bold">
                            <p class="md:absolute md:translate-x-96">{{ $orderProduct['formattedTime3'] ?? '' }}</p>
                        </div>

                        <!-- DESCRIPTION -->
                        <div class="text-xs font-semibold mt-2">
                            Pesanan Anda Sudah Bisa Diambil
                        </div>
                    </div>
                </div>
            @endisset
            {{-- end --}}
        </div>
    </div>
</div>
