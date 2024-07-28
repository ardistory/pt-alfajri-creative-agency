<div class="mb-10">
    <div class="mb-10 flex justify-end">
        <span class="text-red-700 font-bold text-4xl">{{ $title[0]['name'] }}</span>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-20">
        @foreach ($products as $product)
            <div>
                <img src="{{ asset('storage/img-product/' . $product->img) }}" class="rounded-xl w-48 h-48" />
                <div class="font-bold text-lg mt-3">
                    {{ $product->name }}
                </div>
                <div class="text-xs mt-3">
                    {{ $product->description }}
                </div>
                <a href="" class="underline text-red-700 font-bold text-sm">Hubungi Kami</a>
            </div>
        @endforeach
    </div>
</div>
