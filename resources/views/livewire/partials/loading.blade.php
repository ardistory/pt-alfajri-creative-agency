<div wire:init='loadData' wire:loading wire:target='loadData'
    class="absolute top-0 left-0 w-full h-screen bg-gradient-to-b from-red-900 to-red-700 text-white flex justify-center items-center font-bold text-lg z-50">
    <div class="mt-56 flex flex-col justify-center items-center">
        <span wire:loading wire:target='loadData'>Mohon tunggu, sedang load data</span>
        <x-loading class="loading-bars" />
    </div>
</div>
