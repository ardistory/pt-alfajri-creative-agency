<div>
    <div class="grid grid-cols-7 mt-14 gap-5">
        <div class="col-span-3">
            <img src="{{ asset('assets/img/advertising-ilustrasi.png') }}" class="rounded-2xl" />
        </div>
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
                <x-button class="btn-error bg-red-900 btn-sm mt-10 rounded-none"
                    link="https://api.whatsapp.com/send/?phone=6282123131995&text&type=phone_number&app_absent=0"
                    external>
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
            <img class="w-[100px] h-auto" src="{{ asset('assets/icon/advertising-icon.png') }}" alt="">
            <span class="text-black dark:text-white text-2xl font-bold">Print A3+</span>
        </div>
        <div class="flex flex-col items-center gap-4">
            <img class="w-[100px] h-auto" src="{{ asset('assets/icon/advertising-icon2.png') }}" alt="">
            <span class="text-black dark:text-white text-2xl font-bold">Large Format</span>
        </div>
        <div class="flex flex-col items-center gap-4">
            <img class="w-[100px] h-auto" src="{{ asset('assets/icon/advertising-icon3.png') }}" alt="">
            <span class="text-black dark:text-white text-2xl font-bold">DTF Print</span>
        </div>
        <div class="flex flex-col items-center gap-4">
            <img class="w-[100px] h-auto" src="{{ asset('assets/icon/advertising-icon4.png') }}" alt="">
            <span class="text-black dark:text-white text-2xl font-bold">Merchandise</span>
        </div>
    </div>
    <div class="mt-20 flex justify-center flex-wrap gap-20 mb-20">
        <div class="flex flex-col items-center gap-4">
            <img class="w-[100px] h-auto" src="{{ asset('assets/icon/advertising-icon5.png') }}" alt="">
            <span class="text-black dark:text-white text-2xl font-bold">Katalog & Buku</span>
        </div>
        <div class="flex flex-col items-center gap-4">
            <img class="w-[100px] h-auto" src="{{ asset('assets/icon/advertising-icon6.png') }}" alt="">
            <span class="text-black dark:text-white text-2xl font-bold">Flyer & Brochure</span>
        </div>
        <div class="flex flex-col items-center gap-4">
            <img class="w-[100px] h-auto" src="{{ asset('assets/icon/advertising-icon7.png') }}" alt="">
            <span class="text-black dark:text-white text-2xl font-bold">Stationary</span>
        </div>
    </div>
</div>
