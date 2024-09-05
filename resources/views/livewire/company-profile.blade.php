<div>
    <div class="max-w-full flex flex-col items-center relative mb-40">
        <img class="w-full" src="{{ asset('assets/img/company-profile-banner.png') }}" alt="">
        <div class="absolute z-10 right-5 bottom-5">
            <p class="underline text-white text-xl md:text-5xl font-bold">COMPANY PROFILE</p>
            <x-button class="btn-error bg-red-900 btn-sm mt-3 md:mt-10 rounded-none float-right">
                <x-slot:label>
                    <span class="underline text-white">Mulai Sekarang</span>
                </x-slot:label>
            </x-button>
        </div>
    </div>
    <div class="flex flex-col md:flex-row justify-evenly gap-20 mb-40">
        <div class="max-w-2xl space-y-10 flex flex-col justify-center items-end text-black dark:text-white">
            <p class="font-semibold text-lg">
                <span class="font-bold text-lg">Company Profile</span> adalah gambaran umum tentang sebuah
                perusahaan
                yang
                mencakup informasi
                mengenai sejarah,
                visi misi, nilai-nilai perusahaan, produk atau layanan yang ditawarkan, serta pencapaian dan
                keunggulan
                perusahaan.
            </p>
            <p class="font-semibold text-lg">
                Tujuan dari <span class="font-bold text-lg">Company Profile</span> adalah
                untuk memberikan gambaran yang jelas
                tentang identitas
                dan kegiatan
                perusahaan, serta untuk meningkatkan citra dan kepercayaan terhadap perusahaan tersebut di mata
                publik.
            </p>
        </div>
        <div>
            <img src="{{ asset('assets/img/company-profile-banner2.png') }}" alt="">
        </div>
    </div>
    <div class="mb-32">
        <div class="mb-20">
            <p class="text-black dark:text-white text-center text-2xl md:text-5xl font-medium">ISI <span
                    class="underline font-bold">COMPANY
                    PROFILE</span></p>
        </div>
        <div class="mt-20 grid grid-cols-3 grid-rows-3 gap-7">
            <div class="flex flex-col items-center gap-4 col-span-1 row-span-1">
                <img class="w-[70px] h-[70px] md:w-[100px] md:h-[100px]"
                    src="{{ asset('assets/icon/company-profile-icon4.png') }}" alt="">
                <span class="text-black dark:text-white text-xs md:text-2xl font-bold">
                    Sejarah Perusahaan
                </span>
            </div>
            <div class="flex flex-col items-center gap-4 col-span-1 row-span-1">
                <img class="w-[70px] h-[70px] md:w-[100px] md:h-[100px]"
                    src="{{ asset('assets/icon/company-profile-icon3.png') }}" alt="">
                <span class="text-black dark:text-white text-xs md:text-2xl font-bold">
                    Visi, Misi, dan Nilai Perusahaan
                </span>
            </div>
            <div class="flex flex-col items-center gap-4 col-span-1 row-span-1">
                <img class="w-[70px] h-[70px] md:w-[100px] md:h-[100px]"
                    src="{{ asset('assets/icon/company-profile-icon2.png') }}" alt="">
                <span class="text-black dark:text-white text-xs md:text-2xl font-bold">
                    Produk atau Layanan
                </span>
            </div>
            <div class="flex flex-col items-center gap-4 col-span-1 row-span-1">
                <img class="w-[70px] h-[70px] md:w-[100px] md:h-[100px]"
                    src="{{ asset('assets/icon/company-profile-icon.png') }}" alt="">
                <span class="text-black dark:text-white text-xs md:text-2xl font-bold">
                    Pencapaian dan Penghargaan
                </span>
            </div>
            <div class="flex flex-col items-center gap-4 col-span-1 row-span-1">
                <img class="w-[70px] h-[70px] md:w-[100px] md:h-[100px]"
                    src="{{ asset('assets/icon/company-profile-icon5.png') }}" alt="">
                <span class="text-black dark:text-white text-xs md:text-2xl font-bold">
                    Informasi Kontak & Alamat
                </span>
            </div>
            <div class="flex flex-col items-center gap-4 col-span-1 row-span-1">
                <img class="w-[70px] h-[70px] md:w-[100px] md:h-[100px]"
                    src="{{ asset('assets/icon/company-profile-icon6.png') }}" alt="">
                <span class="text-black dark:text-white text-xs md:text-2xl font-bold">
                    Logo dan Identitas Visual
                </span>
            </div>
        </div>
    </div>
</div>
