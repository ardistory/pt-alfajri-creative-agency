<div>
    <div>
        <x-carousel :slides="$slides" />
    </div>
    <div class="flex justify-center mt-10 md:mt-20">
        <span class="text-white text-4xl font-bold tracking-wide">We Deliver Your <span
                class="font-DK">Story</span></span>
    </div>
    <div class="flex flex-col justify-center items-center mt-40 md:mt-72 squares">
        <span class="text-white text-xl md:text-4xl font-bold tracking-wide">VALUE OF ALFAJRI CREATIVE AGENCY</span>
        <div class="mt-5 md:mt-10 flex gap-5 md:gap-20">
            <div class="flex flex-col items-center gap-4">
                <x-icon name="phosphor.shield-check"
                    class="w-20 h-20 md:w-36 md:h-36 bg-white text-red-700 p-5 rounded-full" />
                <span class="text-white text-2xl">TRUST</span>
            </div>
            <div class="flex flex-col items-center gap-4">
                <x-icon name="phosphor.plant"
                    class="w-20 h-20 md:w-36 md:h-36 bg-white text-red-700 p-5 rounded-full" />
                <span class="text-white text-2xl">GROWTH</span>
            </div>
            <div class="flex flex-col items-center gap-4">
                <x-icon name="phosphor.brain"
                    class="w-20 h-20 md:w-36 md:h-36 bg-white text-red-700 p-5 rounded-full" />
                <span class="text-white text-2xl">CREATIVITY</span>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-5 mt-32 md:mt-72">
        <x-card class="col-span-12 md:col-span-6 rounded-none dark:rounded-xl dark:shadow-2xl dark:shadow-white">
            <x-slot:title>
                <span class="text-4xl font-extrabold text-red-700 dark:text-white">OUR STORY</span>
            </x-slot:title>

            <span class="text-sm text-black dark:text-white">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam facilis dolorum tempore unde
                praesentium iusto inventore excepturi cupiditate quibusdam, animi eos! Aliquid repellat fuga numquam
                veritatis iste voluptatum ut eaque rem accusantium facere earum odio fugiat ullam excepturi blanditiis
                illo tempore dolorem
            </span>

            <x-slot:figure>
                <img src="https://picsum.photos/700/300" />
            </x-slot:figure>
            <x-slot:actions>
                <x-button icon-right="phosphor.paper-plane-right" label="Mulai Sekarang"
                    class="btn-error rounded-none text-white bg-red-700 mt-5" />
            </x-slot:actions>
        </x-card>
        <x-card class="col-span-12 md:col-span-6 rounded-none dark:rounded-xl dark:shadow-2xl dark:shadow-white">
            <x-slot:title>
                <span class="text-4xl font-extrabold text-red-700 dark:text-white">TESTIMONI</span>
            </x-slot:title>

            <span class="text-sm text-black dark:text-white">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam facilis dolorum tempore unde
                praesentium iusto inventore excepturi cupiditate quibusdam, animi eos! Aliquid repellat fuga numquam
                veritatis iste voluptatum ut eaque rem accusantium facere earum odio fugiat ullam excepturi blanditiis
                illo tempore dolorem
            </span>

            <x-slot:figure>
                <img src="https://picsum.photos/700/300" />
            </x-slot:figure>
            <x-slot:actions>
                <x-button icon-right="phosphor.paper-plane-right" label="Mulai Sekarang"
                    class="btn-error rounded-none text-white bg-red-700 mt-5" />
            </x-slot:actions>
        </x-card>
    </div>
    <div class="h-screen flex flex-col justify-center items-center gap-5">
        <span class="max-w-[900px] text-white dark:text-amber-200 text-2xl italic tracking-wide">
            In the journey of life, we encounter many things that shape our story. Each experience holds intrinsic
            value, teaching us lessons that guide our decisions and shape our perspectives. Every decision reflects our
            values-integrity, growth, and creativity-building a narrative that resonates with others.
        </span>
        <span class="font-semibold text-2xl italic">-ALFAJRI CREATIVE AGENCY</span>
    </div>
</div>
