<div class="mt-5 mb-16 flex flex-col justify-center items-center">
    <p class="text-red-600 dark:text-white text-xl font-bold">STATUS ORDER</p>
    <x-form wire:submit="save" class="mt-5 w-96" no-separator>
        <x-input label="Nomor Invoice" class="input-error border-black/80 dark:input-primary" placeholder="OL-1995"
            wire:model="name" />
        <x-input label="Nomor Handphone" class="input-error border-black/80 dark:input-primary" placeholder="082123131995"
            wire:model="name" />

        <x-slot:actions>
            <x-button label="CEK STATUS ORDER"
                class="w-full mt-9 btn-error bg-red-600 dark:btn-primary text-white dark:text-black rounded-none"
                type="submit" spinner="save" />
        </x-slot:actions>
    </x-form>
    <div class="w-4/5 hidden">
        <div class="bg-red-700 text-white px-6 py-2 flex items-center gap-3">
            <x-button class="btn-circle btn-sm bg-red-950 text-white border-none hover:bg-red-800"
                icon="phosphor.arrow-left" responsive />
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
                <p class="text-[8px] absolute -translate-y-4">*(Jika Barang Dikirim)</p>
                </p>
            </div>
            <div class="text-xs font-semibold space-y-3 col-span-3 md:col-span-4">
                <p class="before:content-[':'] before:mr-1">OL-1995</p>
                <p class="before:content-[':'] before:mr-1">1 Agustus 2024</p>
                <p class="before:content-[':'] before:mr-1">Norton</p>
                <p class="before:content-[':'] before:mr-1">082123131995</p>
                <p class="before:content-[':'] before:mr-1"><a class="underline text-blue-400"
                        href="https://get.paper.id/4txm59h" target="_blank">get.paper.id/4txm59h</a></p>
                <p class="before:content-[':'] before:mr-1">-</p>
            </div>
        </div>
        <div class="px-6 py-2 flex items-center gap-3 border-b-2 border-black/50">
            <p class="font-bold text-xl">STATUS PESANAN</p>
        </div>
        <div class="p-6 translate-x-20 mt-5">
            {{-- 1 --}}
            <div>
                <!-- Last item `border cut` -->
                <div @class([
                    'border-s-2 border-s-red-600 h-5 -mb-5' => false, //last
                    '!border-s-primary' => false, //pending
                ])>
                </div>

                <!-- WRAPPER THAT ALSO ACTS A LINE CONNECTOR -->
                <div @class([
                    'border-s-2 border-s-red-600 ps-8 py-3',
                    '!border-s-primary' => false, //pending
                    'pt-0' => true, //first
                    '!border-s-0' => false, //last
                ])>
                    <!-- BULLET -->
                    <div>
                        <x-icon name="phosphor.paint-brush" class="w-9 h-9 text-red-600 absolute -translate-x-24" />
                        <div @class([
                            'w-4 h-4 -mb-5 -ms-[41px] rounded-full bg-red-600 text-white',
                            'bg-primary' => false, //pending
                            '!-ms-[39px]' => true, //last
                            'w-8 h-8 !-ms-[48px] -mb-7' => true, //icon
                        ])>
                            <!-- ICON PENDING-->
                            <x-mary-icon name="phosphor.check" @class(['ms-2 mt-1 w-4 h-4', 'text-base-100' => false]) />
                        </div>
                    </div>

                    <!-- TITLE -->
                    <div @class(['font-bold mb-1 text-red-600'])>
                        Kamis, 1 Agustus 2024
                    </div>

                    <!-- SUBTITLE -->
                    <div class="text-xs text-gray-500/50 font-bold">
                        <p class="md:absolute md:translate-x-96">10:00 WIB</p>
                    </div>

                    <!-- DESCRIPTION -->
                    <div class="text-xs font-semibold mt-2">
                        Pesanan Anda Sedang Proses Desain / Setting
                    </div>
                </div>
            </div>
            {{-- 2 --}}
            <div>
                <!-- Last item `border cut` -->
                <div @class([
                    'border-s-2 border-s-red-600 h-5 -mb-5' => false, //last
                    '!border-s-primary' => false, //pending
                ])>
                </div>

                <!-- WRAPPER THAT ALSO ACTS A LINE CONNECTOR -->
                <div @class([
                    'border-s-2 border-s-red-600 ps-8 py-3',
                    '!border-s-primary' => false, //pending
                    'pt-0' => true, //first
                    '!border-s-0' => false, //last
                ])>
                    <!-- BULLET -->
                    <div>
                        <x-icon name="phosphor.gear" class="w-9 h-9 text-red-600 absolute -translate-x-24" />
                        <div @class([
                            'w-4 h-4 -mb-5 -ms-[41px] rounded-full bg-red-600 text-white',
                            'bg-primary' => false, //pending
                            '!-ms-[39px]' => false, //last
                            'w-8 h-8 !-ms-[48px] -mb-7' => true, //icon
                        ])>
                            <!-- ICON PENDING-->
                            <x-mary-icon name="phosphor.check" @class(['ms-2 mt-1 w-4 h-4', 'text-base-100' => false]) />
                        </div>
                    </div>

                    <!-- TITLE -->
                    <div @class(['font-bold mb-1 text-red-600'])>
                        Kamis, 1 Agustus 2024
                    </div>

                    <!-- SUBTITLE -->
                    <div class="text-xs text-gray-500/50 font-bold">
                        <p class="md:absolute md:translate-x-96">10:00 WIB</p>
                    </div>

                    <!-- DESCRIPTION -->
                    <div class="text-xs font-semibold mt-2">
                        Pesanan Anda Sedang Proses Produksi
                    </div>
                </div>
            </div>
            {{-- 3 --}}
            <div>
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
                        <x-icon name="phosphor.package" class="w-9 h-9 text-red-600 absolute -translate-x-24" />
                        <div @class([
                            'w-4 h-4 -mb-5 -ms-[41px] rounded-full bg-red-600 text-white',
                            'bg-primary' => false, //pending
                            '!-ms-[39px]' => true, //last
                            'w-8 h-8 !-ms-[48px] -mb-7' => true, //icon
                        ])>
                            <!-- ICON PENDING-->
                            <x-mary-icon name="phosphor.check" @class(['ms-2 mt-1 w-4 h-4', 'text-base-100' => false]) />
                        </div>
                    </div>

                    <!-- TITLE -->
                    <div @class(['font-bold mb-1 text-red-600'])>
                        Kamis, 1 Agustus 2024
                    </div>

                    <!-- SUBTITLE -->
                    <div class="text-xs text-gray-500/50 font-bold">
                        <p class="md:absolute md:translate-x-96">10:00 WIB</p>
                    </div>

                    <!-- DESCRIPTION -->
                    <div class="text-xs font-semibold mt-2">
                        Pesanan Anda Sudah Bisa Diambil
                    </div>
                </div>
            </div>
            {{-- end --}}
        </div>
    </div>
</div>
