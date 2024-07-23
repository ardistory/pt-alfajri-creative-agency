<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>{{ isset($title) ? 'PT. ALFAJRI CREATIVE AGENCY' . ' - ' . $title : 'PT. ALFAJRI CREATIVE AGENCY' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-Inter">

    {{-- The navbar with `sticky` and `full-width` --}}
    <x-nav class="bg-red-600 dark:bg-base-100 border-none" sticky full-width>
        <x-slot:brand>
            {{-- Drawer toggle for "main-drawer" --}}
            <label for="main-drawer" class="lg:hidden mr-3 text-white">
                <x-icon name="o-bars-3" class="cursor-pointer" />
            </label>

            {{-- Brand --}}
            <div class="flex flex-col justify-center items-center">
                <x-button label="LOGO" icon="phosphor.package" class="btn-outline btn-sm text-white" />
                <span class="font-semibold text-[9px] drop-shadow-md text-white">PT. ALFAJRI CREATIVE AGENCY</span>
            </div>
        </x-slot:brand>

        {{-- Right side actions --}}
        <x-slot:actions>
            <x-dropdown class="hidden lg:flex">
                <x-slot:trigger>
                    <x-button label="Kategori" icon="phosphor.squares-four" icon-right="phosphor.caret-down"
                        class="btn-sm bg-red-600 border-none text-white hover:bg-red-700 dark:bg-base-100 dark:hover:bg-gray-500/30 hidden lg:flex" />
                </x-slot:trigger>
                <div class="flex">
                    <div>
                        <x-menu-item title="Advertising" icon="cui.cib-google-ads" />
                        <x-menu-separator />
                        <x-menu-item title="Print A3+" icon="cui.cil-print" />
                        <x-menu-item title="Large Format" icon="cui.cib-sprint" />
                        <x-menu-item title="DTF Print" icon="cui.cil-print" />
                        <x-menu-item title="Merchandise" icon="cui.cil-casino" />
                        <x-menu-item title="Katalog & Buku" icon="cui.cil-book" />
                        <x-menu-item title="Flyer & Brochure" icon="cui.cil-browser" />
                        <x-menu-item title="Stationary" icon="cui.cil-barcode" />
                    </div>
                    <div>
                        <x-menu-item title="Graphic Design" icon="cui.cil-pen-nib" />
                        <x-menu-separator />
                        <x-menu-item title="Digital Design" icon="cui.cil-braille" />
                        <x-menu-item title="Branding" icon="cui.cil-bullhorn" />
                        <x-menu-item title="Product Packaging" icon="phosphor.package" />
                        <x-menu-item title="Company Profile" icon="phosphor.buildings" />
                        <x-menu-item title="Katalog Product" icon="phosphor.bag-simple" />
                        <x-menu-item title="Design Website" icon="phosphor.google-chrome-logo" />
                    </div>
                    <div>
                        <x-menu-item title="Digital Marketing" icon="phosphor.storefront" />
                        <x-menu-separator />
                        <x-menu-item title="Sosial Media Management : IG & Tiktok" icon="phosphor.instagram-logo" />
                        <x-menu-item title="Video Production" icon="phosphor.video" />
                        <x-menu-item title="Google Ads" icon="phosphor.google-logo" />
                    </div>
                </div>
            </x-dropdown>
            <x-button label="Tentang Kami" link="###" class="btn-ghost btn-sm hidden lg:flex text-white"
                responsive />
            <x-button label="Kontak" link="###" class="btn-ghost btn-sm hidden lg:flex text-white" responsive />
            <x-button label="Status Order" link="###" class="btn-ghost btn-sm hidden lg:flex text-white"
                responsive />
            <x-button label="FAQ" link="###" class="btn-ghost btn-sm hidden lg:flex text-white" responsive />
            <x-input wire:model="product" icon-right="phosphor.magnifying-glass" placeholder="Cari Produk"
                class="text-black input-sm input-error dark:input-primary rounded-full" />
            <x-theme-toggle class="btn btn-sm btn-circle btn-ghost text-white" />
        </x-slot:actions>
    </x-nav>

    {{-- The main content with `full-width` --}}
    <x-main with-nav full-width>

        {{-- This is a sidebar that works also as a drawer on small screens --}}
        {{-- Notice the `main-drawer` reference here --}}
        <x-slot:sidebar drawer="main-drawer" collapsible class="bg-base-200 lg:hidden">

            {{-- User --}}
            @if ($user = auth()->user())
                <x-list-item :item="$user" value="name" sub-value="email" no-separator no-hover class="pt-2">
                    <x-slot:actions>
                        <x-button icon="o-power" class="btn-circle btn-ghost btn-xs" tooltip-left="logoff"
                            no-wire-navigate link="/logout" />
                    </x-slot:actions>
                </x-list-item>

                <x-menu-separator />
            @endif

            {{-- Activates the menu item when a route matches the `link` property --}}
            <x-menu class="w-64">
                <x-menu-sub title="Advertising" icon="cui.cib-google-ads">
                    <x-menu-item title="Print A3+" icon="cui.cil-print" />
                    <x-menu-item title="Large Format" icon="cui.cib-sprint" />
                    <x-menu-item title="DTF Print" icon="cui.cil-print" />
                    <x-menu-item title="Merchandise" icon="cui.cil-casino" />
                    <x-menu-item title="Katalog & Buku" icon="cui.cil-book" />
                    <x-menu-item title="Flyer & Brochure" icon="cui.cil-browser" />
                    <x-menu-item title="Stationary" icon="cui.cil-barcode" />
                </x-menu-sub>
                <x-menu-sub title="Graphic Design" icon="cui.cil-pen-nib">
                    <x-menu-item title="Wifi" icon="o-wifi" />
                    <x-menu-item title="Digital Design" icon="cui.cil-braille" />
                    <x-menu-item title="Branding" icon="cui.cil-bullhorn" />
                    <x-menu-item title="Product Packaging" icon="phosphor.package" />
                    <x-menu-item title="Company Profile" icon="phosphor.buildings" />
                    <x-menu-item title="Katalog Product" icon="phosphor.bag-simple" />
                    <x-menu-item title="Design Website" icon="phosphor.google-chrome-logo" />
                </x-menu-sub>
                <x-menu-sub title="Digital Marketing" icon="phosphor.storefront">
                    <x-menu-item title="Sosial Media Management : IG & Tiktok" icon="phosphor.instagram-logo" />
                    <x-menu-item title="Video Production" icon="phosphor.video" />
                    <x-menu-item title="Google Ads" icon="phosphor.google-logo" />
                </x-menu-sub>
            </x-menu>
        </x-slot:sidebar>

        {{-- The `$slot` goes here --}}
        <x-slot:content>
            {{ $slot }}
        </x-slot:content>
    </x-main>

    {{--  TOAST area --}}
    <x-toast />
</body>

</html>
