<div>
    <div class="grid grid-cols-7 mt-14 gap-5">
        <x-card class="col-span-3">
            <x-slot:figure>
                <img src="https://picsum.photos/400/400" class="rounded-2xl" />
            </x-slot:figure>
        </x-card>
        <div class="col-span-4 flex flex-col justify-center">
            <span class="inline-block text-4xl font-bold">
                APA ITU <span class="underline">ADVERTISING?</span>
            </span>
            <span class="inline-block mt-4 font-semibold">
                Advertising adalah suatu bentuk komunikasi yang digunakan untuk mempromosikan atau mengiklankan produk,
                layanan, atau ide melalui berbagai media. Tujuan utama dari advertising adalah untuk menarik perhatian,
                mempengaruhi perilaku, dan memotivasi untuk membeli produk atau menggunakan layanan yang diiklankan.
            </span>
            <span class="inline-block mt-4 font-semibold">
                Proses advertising melibatkan pembuatan pesan atau iklan yang menarik, strategi penempatan iklan di
                media
                yang tepat. Media yang digunakan dalam advertising dapat beragam, mulai dari cetak, televisi, hingga
                platform digital seperti internet dan media sosial.
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
    <div class="mt-20 flex justify-center flex-wrap gap-20">
        <div class="flex flex-col items-center gap-4">
            <x-icon name="cui.cil-print" class="w-20 h-20 md:w-24 md:h-24 bg-red-700 text-white p-2 rounded-full" />
            <span class="text-black dark:text-white text-2xl font-bold">Print A3+</span>
        </div>
        <div class="flex flex-col items-center gap-4">
            <x-icon name="cui.cib-sprint" class="w-20 h-20 md:w-24 md:h-24 bg-red-700 text-white p-2 rounded-full" />
            <span class="text-black dark:text-white text-2xl font-bold">Large Format</span>
        </div>
        <div class="flex flex-col items-center gap-4">
            <x-icon name="cui.cil-print" class="w-20 h-20 md:w-24 md:h-24 bg-red-700 text-white p-2 rounded-full" />
            <span class="text-black dark:text-white text-2xl font-bold">DTF Print</span>
        </div>
        <div class="flex flex-col items-center gap-4">
            <x-icon name="cui.cil-casino" class="w-20 h-20 md:w-24 md:h-24 bg-red-700 text-white p-2 rounded-full" />
            <span class="text-black dark:text-white text-2xl font-bold">Merchandise</span>
        </div>
    </div>
    <div class="mt-20 flex justify-center flex-wrap gap-20 mb-20">
        <div class="flex flex-col items-center gap-4">
            <x-icon name="cui.cil-book" class="w-20 h-20 md:w-24 md:h-24 bg-red-700 text-white p-2 rounded-full" />
            <span class="text-black dark:text-white text-2xl font-bold">Katalog & Buku</span>
        </div>
        <div class="flex flex-col items-center gap-4">
            <x-icon name="cui.cil-browser" class="w-20 h-20 md:w-24 md:h-24 bg-red-700 text-white p-2 rounded-full" />
            <span class="text-black dark:text-white text-2xl font-bold">Flyer & Brochure</span>
        </div>
        <div class="flex flex-col items-center gap-4">
            <x-icon name="cui.cil-barcode" class="w-20 h-20 md:w-24 md:h-24 bg-red-700 text-white p-2 rounded-full" />
            <span class="text-black dark:text-white text-2xl font-bold">Stationary</span>
        </div>
    </div>
</div>
