<div class="relative">
    <img class="hidden md:block w-auto h-[85%] absolute top-[10%] left-[50%] translate-x-[-50%]"
        src="{{ asset('assets/img/paper-airplane.png') }}">
    <div class="mt-4">
        <x-carousel :slides="$slides" without-indicators class="!h-[450px]">
            @scope('content', $slide)
                <div class="bg-yellow-300 absolute left-0 md:left-5 bottom-0 md:bottom-5 w-full md:w-1/4 p-4 md:rounded-3xl">
                    <p class="text-red-700 font-bold text-2xl">{{ $slide['title'] }}</p>
                    <p class="text-xs dark:text-black font-medium mt-2">{{ $slide['description'] }}</p>
                </div>
            @endscope
        </x-carousel>
    </div>
    <div class="flex justify-center mt-10 md:mt-[5%]">
        <span class="text-white text-4xl font-bold tracking-wide">
            We Deliver Your
            <span class="font-DK">Story</span>
        </span>
    </div>
    <div class="flex flex-col justify-center items-center mt-40 md:mt-[20%]">
        <span class="text-white text-xl md:text-4xl font-bold tracking-wide z-[1]">VALUE OF ALFAJRI CREATIVE
            AGENCY</span>
        <div class="mt-5 md:mt-10 flex gap-5 md:gap-20">
            <div class="flex flex-col items-center gap-4">
                <img class="w-[100px] h-[100px] md:w-[150px] md:h-[150px]"
                    src="{{ asset('assets/icon/trust-icon.png') }}" alt="">
                <span class="text-white text-2xl">TRUST</span>
            </div>
            <div class="flex flex-col items-center gap-4">
                <img class="w-[100px] h-[100px] md:w-[150px] md:h-[150px]"
                    src="{{ asset('assets/icon/growth-icon.png') }}" alt="">
                <span class="text-white text-2xl">GROWTH</span>
            </div>
            <div class="flex flex-col items-center gap-4">
                <img class="w-[100px] h-[100px] md:w-[150px] md:h-[150px]"
                    src="{{ asset('assets/icon/creative-icon.png') }}" alt="">
                <span class="text-white text-2xl">CREATIVITY</span>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-5 mt-32 md:mt-72 z-50">
        <x-card class="col-span-12 md:col-span-6 rounded-none dark:rounded-xl dark:shadow-sm dark:shadow-white">
            <x-slot:title>
                <span class="text-4xl font-extrabold text-red-700 dark:text-white">OUR STORY</span>
            </x-slot:title>

            <span class="text-sm text-black dark:text-white">
                Setiap kampanye kami adalah perjalanan unik yang penuh dengan kejutan. Melalui narasi yang menyenangkan,
                kami tidak hanya membangun merek, tetapi juga membangun hubungan dengan pelanggan kami😂 Mengejar
                keunggulan kreatif yang mengubah pandangan dan menciptakan pengalaman yang tak terlupakan bagi setiap
                pelanggan yang kami layani😎
            </span>

            <x-slot:figure>
                <img src="{{ asset('assets/img/our-story-banner.png') }}" />
            </x-slot:figure>
            <x-slot:actions>
                <x-button
                    link="https://api.whatsapp.com/send/?phone=6282123131995&text=Hallo,%20Admin%20Alfajri%20Creative%20Agency&type=phone_number&app_absent=0"
                    external icon-right="phosphor.telegram-logo" label="Mulai Sekarang"
                    class="btn-error rounded-none text-white bg-red-700 mt-5 z-10" />
            </x-slot:actions>
        </x-card>
        <x-card class="col-span-12 md:col-span-6 rounded-none dark:rounded-xl dark:shadow-sm dark:shadow-white">
            <x-slot:title>
                <span class="text-4xl font-extrabold text-red-700 dark:text-white">TESTIMONI</span>
            </x-slot:title>

            <span class="text-sm text-black dark:text-white">
                Kami menikmati berbagai sumber inspirasi. Membangkitkan rasa syukur dan tindakan yang positif. Kami
                melihat berbagai keajaiban😂 di sekitar dan merasakan kegembiraan yang melampaui kata-kata. Dengan penuh
                kehangatan, kami ingin membawa kehidupan ini menjadi perjalanan yang tak terlupakan, menciptakan jejak
                dan yang memancarkan cahaya dalam hati setiap orang😍
            </span>

            <x-slot:figure>
                <img src="{{ asset('assets/img/testimoni-banner.png') }}" />
            </x-slot:figure>
            <x-slot:actions>
                <x-button link="{{ route('testimoni') }}" icon-right="phosphor.telegram-logo" label="Mulai Sekarang"
                    class="btn-error rounded-none text-white bg-red-700 mt-5 z-10" />
            </x-slot:actions>
        </x-card>
    </div>
    <div class="h-screen flex flex-col justify-center items-center gap-5 relative -translate-y-[15%]">
        <span
            class="max-w-[900px] text-white dark:text-amber-200 text-2xl italic tracking-wide z-10 before:md:w-[450px] before:left-0 before:md:h-[450px] before:w-[400px] before:h-[400px] before:bg-orange-800/60 before:dark:bg-zinc-600/40 before:-z-[1] before:absolute before:rounded-full before:md:-translate-x-[90%] before:md:-translate-y-[30%] before:-translate-x-[80%] before:-translate-y-[15%]">
            In the journey of life, we encounter many things that shape our story. Each experience holds intrinsic
            value, teaching us lessons that guide our decisions and shape our perspectives. Every decision reflects our
            values-integrity, growth, and creativity-building a narrative that resonates with others.
        </span>
        <span class="font-semibold text-2xl italic">-ALFAJRI CREATIVE AGENCY</span>
    </div>
</div>
