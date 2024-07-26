<div>
    <div class="grid grid-cols-7 mt-14 gap-5">
        <x-card class="col-span-3">
            <x-slot:figure>
                <img src="https://picsum.photos/400/400" class="rounded-2xl" />
            </x-slot:figure>
        </x-card>
        <div class="col-span-4 flex flex-col justify-center">
            <span class="inline-block text-4xl font-bold">
                APA ITU <span class="underline">GRAPHIC DESIGN?</span>
            </span>
            <span class="inline-block mt-4 font-semibold">
                Graphic design adalah proses menciptakan visual dan komunikasi dengan menggunakan elemen-elemen grafis
                seperti gambar, teks, dan warna. Tujuan utama dari graphic design adalah untuk menyampaikan pesan atau
                informasi secara visual dengan cara yang menarik dan efektif.
            </span>
            <span class="inline-block mt-4 font-semibold">
                Graphic design juga berperan dalam membangun identitas merek, memvisualisasikan ide-ide kompleks, dan
                menyediakan pengalaman visual yang memikat bagi pengguna atau audiens. Dengan adanya kemajuan teknologi,
                bidang graphic design juga terus berkembang dan mengintegrasikan teknologi digital dalam proses
                desainnya.
            </span>
            <div class="flex justify-center">
                <x-button class="btn-error bg-red-900 btn-sm mt-10 rounded-none">
                    <x-slot:label>
                        <span class="underline text-white">Hubungi Kami</span>
                    </x-slot:label>
                </x-button>
            </div>
        </div>
    </div>
    <div class="flex justify-center mt-20">
        <span class="inline-block underline font-semibold text-3xl">OUR SERVICES</span>
    </div>
    <div class="mt-20 grid grid-cols-3 grid-rows-3 gap-7">
        <div class="flex flex-col items-center gap-4 col-span-1 row-span-1">
            <x-icon name="cui.cil-braille" class="w-20 h-20 md:w-24 md:h-24 bg-red-700 text-white p-2 rounded-full" />
            <span class="text-black dark:text-white text-2xl font-bold">Digital Design</span>
        </div>
        <div class="flex flex-col items-center gap-4 col-span-1 row-span-1">
            <x-icon name="cui.cil-bullhorn" class="w-20 h-20 md:w-24 md:h-24 bg-red-700 text-white p-2 rounded-full" />
            <span class="text-black dark:text-white text-2xl font-bold">Branding</span>
        </div>
        <div class="flex flex-col items-center gap-4 col-span-1 row-span-1">
            <x-icon name="phosphor.package" class="w-20 h-20 md:w-24 md:h-24 bg-red-700 text-white p-2 rounded-full" />
            <span class="text-black dark:text-white text-2xl font-bold">Product Packaging</span>
        </div>
        <div class="flex flex-col items-center gap-4 col-span-1 row-span-1">
            <x-icon name="phosphor.buildings"
                class="w-20 h-20 md:w-24 md:h-24 bg-red-700 text-white p-2 rounded-full" />
            <span class="text-black dark:text-white text-2xl font-bold">Company Profile</span>
        </div>
        <div class="flex flex-col items-center gap-4 col-span-1 row-span-1">
            <x-icon name="phosphor.bag-simple"
                class="w-20 h-20 md:w-24 md:h-24 bg-red-700 text-white p-2 rounded-full" />
            <span class="text-black dark:text-white text-2xl font-bold">Katalog Product</span>
        </div>
        <div class="flex flex-col items-center gap-4 col-span-1 row-span-1">
            <x-icon name="phosphor.google-chrome-logo"
                class="w-20 h-20 md:w-24 md:h-24 bg-red-700 text-white p-2 rounded-full" />
            <span class="text-black dark:text-white text-2xl font-bold">Design Website</span>
        </div>
    </div>
</div>
