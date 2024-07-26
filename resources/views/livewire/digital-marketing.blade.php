<div>
    <div class="grid grid-cols-7 mt-14 gap-5">
        <x-card class="col-span-3">
            <x-slot:figure>
                <img src="https://picsum.photos/400/400" class="rounded-2xl" />
            </x-slot:figure>
        </x-card>
        <div class="col-span-4 flex flex-col justify-center">
            <span class="inline-block text-4xl font-bold">
                APA ITU <span class="underline">DIGITAL MARKETING?</span>
            </span>
            <span class="inline-block mt-4 font-semibold">
                Digital marketing adalah pemasaran yang menggunakan platform dan teknologi digital. Mencakup berbagai
                strategi dan taktik untuk menghubungi dan berinteraksi dengan audiens target secara online, sehingga
                menciptakan kesadaran merek, mempromosikan produk atau layanan, dan menghasilkan penjualan atau
                konversi.
            </span>
            <span class="inline-block mt-4 font-semibold">
                Digital marketing memanfaatkan data dan analisis untuk memahami perilaku konsumen dan mengukur
                keberhasilan kampanye secara lebih akurat dibandingkan dengan metode pemasaran tradisional. Hal ini
                memungkinkan perusahaan atau organisasi untuk lebih terlibat dan berinteraksi dengan audiens mereka di
                dunia digital yang terus berkembang.
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
            <x-icon name="phosphor.instagram-logo"
                class="w-20 h-20 md:w-24 md:h-24 bg-red-700 text-white p-2 rounded-full" />
            <span class="text-black dark:text-white text-2xl font-bold">Sosial Media Management : IG & Tiktok</span>
        </div>
        <div class="flex flex-col items-center gap-4 col-span-1 row-span-1">
            <x-icon name="phosphor.video" class="w-20 h-20 md:w-24 md:h-24 bg-red-700 text-white p-2 rounded-full" />
            <span class="text-black dark:text-white text-2xl font-bold">Video Production</span>
        </div>
        <div class="flex flex-col items-center gap-4 col-span-1 row-span-1">
            <x-icon name="phosphor.google-logo"
                class="w-20 h-20 md:w-24 md:h-24 bg-red-700 text-white p-2 rounded-full" />
            <span class="text-black dark:text-white text-2xl font-bold">Google Ads</span>
        </div>
    </div>
</div>
