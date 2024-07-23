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
    <x-nav
        class="bg-red-600 dark:bg-base-100 text-white py-4 shadow-md shadow-gray-500 dark:shadow-black/10 border-none"
        sticky full-width>
        <x-slot:brand>
            {{-- Drawer toggle for "main-drawer" --}}
            <label for="main-drawer" class="lg:hidden mr-3">
                <x-icon name="o-bars-3" class="cursor-pointer" />
            </label>

            {{-- Brand --}}
            <div class="flex flex-col justify-center items-center">
                <x-button label="LOGO" icon="phosphor.package" class="btn-outline btn-sm text-white" />
                <span class="font-semibold text-[9px] drop-shadow-md">PT. ALFAJRI CREATIVE AGENCY</span>
            </div>
        </x-slot:brand>

        {{-- Right side actions --}}
        <x-slot:actions>
            <x-dropdown class="hidden lg:flex">
                <x-slot:trigger>
                    <x-button label="Kategori" icon="phosphor.squares-four" icon-right="phosphor.caret-down"
                        class="btn-sm bg-red-600 border-none text-white hover:bg-red-700 dark:bg-base-100 dark:hover:bg-gray-500/30 hidden lg:flex" />
                </x-slot:trigger>

                <x-menu-item title="Archive" />
                <x-menu-item title="Move" />
            </x-dropdown>
            <x-button label="Tentang Kami" link="###" class="btn-ghost btn-sm hidden lg:flex" responsive />
            <x-button label="Kontak" link="###" class="btn-ghost btn-sm hidden lg:flex" responsive />
            <x-button label="Status Order" link="###" class="btn-ghost btn-sm hidden lg:flex" responsive />
            <x-button label="FAQ" link="###" class="btn-ghost btn-sm hidden lg:flex" responsive />
            <x-input wire:model="product" icon-right="phosphor.magnifying-glass" placeholder="Cari Produk"
                class="text-black input-sm input-error dark:input-primary rounded-full" />
            <x-theme-toggle class="btn btn-sm btn-circle btn-ghost" />
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
            <x-menu activate-by-route>
                <x-menu-item title="Home" icon="o-home" link="###" />
                <x-menu-item title="Messages" icon="o-envelope" link="###" />
                <x-menu-sub title="Settings" icon="o-cog-6-tooth">
                    <x-menu-item title="Wifi" icon="o-wifi" link="####" />
                    <x-menu-item title="Archives" icon="o-archive-box" link="####" />
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
