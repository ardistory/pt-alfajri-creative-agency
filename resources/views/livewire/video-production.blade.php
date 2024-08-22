<div>
    <div class="relative flex justify-center mb-32">
        <img src="{{ asset('assets/img/video-production-banner.png') }}" alt="">
        <div class="absolute flex flex-col justify-center items-center bottom-3 md:bottom-20">
            <p class="text-white text-sm text-center md:text-3xl font-semibold max-w-[600px]">
                Ciptakan konten visual yang memikat, informatif, dan menginspirasi.
            </p>
            <x-button class="btn-error bg-red-900 btn-sm mt-3 md:mt-10 rounded-none">
                <x-slot:label>
                    <span class="underline text-white">Mulai Sekarang</span>
                </x-slot:label>
            </x-button>
        </div>
    </div>
    <div class="mb-32">
        <p class="font-semibold text-center text-lg md:text-4xl text-black mb-20">APA KEUNGGULAN <span
                class="underline font-bold">VIDEO
                PRODUCTION?</span></p>
        <div class="flex flex-col md:flex-row">
            <div class="flex flex-col justify-center p-3">
                <p class="font-bold text-red-700 mb-3">Menyampaikan Informasi Lebih Efektif</p>
                <p class="text-sm font-semibold text-black">
                    Dibandingkan dengan teks atau gambar, video dapat menyampaikan informasi dengan cara yang lebih
                    jelas, dinamis, dan menarik. Ini memungkinkan untuk menjelaskan produk, layanan, atau konsep yang
                    kompleks dengan lebih mudah dipahami oleh audiens.</p>
            </div>
            <div class="flex flex-col justify-center p-3 border-y md:border-x md:border-y-0 border-slate-500">
                <p class="font-bold text-red-700 mb-3">Memperluas Jangkauan Dan Pengaruh</p>
                <p class="text-sm font-semibold text-black">
                    Dengan adanya platform seperti YouTube, Facebook, Instagram, dan TikTok, video memungkinkan merek
                    untuk mencapai audiens yang lebih luas secara global. Ini membuka peluang baru untuk membangun
                    hubungan dengan pelanggan potensial di seluruh dunia.
            </div>
            <div class="flex flex-col justify-center p-3">
                <p class="font-bold text-red-700 mb-3">Menginspirasi Dan Mempengaruhi</p>
                <p class="text-sm font-semibold text-black">
                    Video memiliki kekuatan untuk menginspirasi dan mempengaruhi emosi audiens dengan cara yang sulit
                    dicapai oleh media lainnya. Ini dapat digunakan untuk membangun hubungan yang lebih dalam dengan
                    audiens dan membangun loyalitas jangka panjang.
            </div>
        </div>
    </div>
    <div class="flex items-center mb-32">
        <div>
            <img class="w-[600px] -translate-x-[9%]" src="{{ asset('assets/img/video-production-banner2.png') }}"
                alt="">
        </div>
        <div>
            <div class="group">
                <p class="text-gray-500 font-bold text-sm md:text-2xl group-hover:text-red-700">
                    Lights, Camera, Action!
                </p>
                <p class="text-gray-500 font-bold text-sm md:text-2xl group-hover:text-black">
                    Where Your Story Comes To Life.
                </p>
            </div>
            <x-button class="btn-error bg-red-900 btn-sm mt-10 rounded-none"
                link="https://api.whatsapp.com/send/?phone=6282123131995&text&type=phone_number&app_absent=0" external>
                <x-slot:label>
                    <span class="underline text-white">Hubungi Kami</span>
                </x-slot:label>
            </x-button>
        </div>
    </div>
</div>
