<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DK+Loopet:wght@100..400&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>{{ isset($title) ? 'PT. ALFAJRI CREATIVE AGENCY' . ' - ' . $title : 'PT. ALFAJRI CREATIVE AGENCY' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

@if (!in_array(Route::currentRouteName(), ['login', 'dashboard', 'order-product']))

    <body x-data
        class="antialiased font-Montserrat dark:bg-gradient-to-r {{ Route::current()->uri != '/' ? 'kotak-polos' : 'kotak' }}">
        {{-- The navbar with `sticky` and `full-width` --}}
        <x-nav
            class="bg-red-700 dark:bg-base-100 shadow-md shadow-black/40 dark:shadow-gray-500/20 border-none z-20 flex md:justify-center"
            sticky full-width>
            <x-slot:brand>
                {{-- Drawer toggle for "main-drawer" --}}
                <label for="main-drawer" class="lg:hidden mr-3 text-white">
                    <x-icon name="o-bars-3" class="cursor-pointer" />
                </label>

                {{-- Brand --}}
                <a wire:navigate href="{{ route('home-page') }}">
                    <img src="{{ asset('assets/img/old-logo.png') }}" class="w-24">
                </a>
            </x-slot:brand>

            {{-- Right side actions --}}
            <x-slot:actions>
                <x-dropdown class="hidden lg:flex">
                    <x-slot:trigger>
                        <x-button label="Kategori" icon="phosphor.squares-four" icon-right="phosphor.caret-down"
                            class="btn-sm bg-red-700 border-none shadow-none text-white hover:bg-red-800 dark:bg-base-100 dark:hover:bg-gray-500/30 hidden lg:flex" />
                    </x-slot:trigger>
                    <div class="flex">
                        <div>
                            <x-menu-item title="Advertising" icon="cui.cib-google-ads"
                                link="{{ route('advertising') }}" />
                            <x-menu-separator />
                            <x-menu-item title="Print A3+" icon="cui.cil-print"
                                link="/list-product/advertising/print-a3" />
                            <x-menu-item title="Large Format" icon="cui.cib-sprint"
                                link="/list-product/advertising/large-format" />
                            <x-menu-item title="DTF Print" icon="cui.cil-print"
                                link="/list-product/advertising/dtf-print" />
                            <x-menu-item title="Merchandise" icon="cui.cil-casino"
                                link="/list-product/advertising/merchandise" />
                            <x-menu-item title="Katalog & Buku" icon="cui.cil-book"
                                link="/list-product/advertising/katalog-buku" />
                            <x-menu-item title="Flyer & Brochure" icon="cui.cil-browser"
                                link="/list-product/advertising/flyer-brochure" />
                            <x-menu-item title="Stationary" icon="cui.cil-barcode"
                                link="/list-product/advertising/stationary" />
                        </div>
                        <div>
                            <x-menu-item title="Graphic Design" icon="cui.cil-pen-nib"
                                link="{{ route('graphic-design') }}" />
                            <x-menu-separator />
                            <x-menu-item title="Digital Design" icon="cui.cil-braille"
                                link="{{ route('digital-design') }}" />
                            <x-menu-item title="Branding" icon="cui.cil-bullhorn" link="{{ route('branding') }}" />
                            <x-menu-item title="Product Packaging" icon="phosphor.package"
                                link="{{ route('product-packaging') }}" />
                            <x-menu-item title="Company Profile" icon="phosphor.buildings"
                                link="{{ route('company-profile') }}" />
                            <x-menu-item title="Katalog Product" icon="phosphor.bag-simple"
                                link="{{ route('katalog-product') }}" />
                            <x-menu-item title="Design Website" icon="phosphor.google-chrome-logo"
                                link="{{ route('design-website') }}" />
                        </div>
                        <div>
                            <x-menu-item title="Digital Marketing" icon="phosphor.storefront"
                                link="{{ route('digital-marketing') }}" />
                            <x-menu-separator />
                            <x-menu-item title="Sosial Media Management : IG & Tiktok" icon="phosphor.instagram-logo"
                                link="{{ route('sosial-media-management') }}" />
                            <x-menu-item title="Video Production" icon="phosphor.video"
                                link="{{ route('video-production') }}" />
                            <x-menu-item title="Google Ads" icon="phosphor.google-logo"
                                link="{{ route('google-ads') }}" />
                        </div>
                    </div>
                </x-dropdown>
                <div class="bg-white w-[1px] h-5"></div>
                <x-button label="Tentang Kami" link="{{ route('about-us') }}"
                    class="btn-ghost btn-sm hidden lg:flex text-white {{ Route::current()->uri == 'about-us' ? 'bg-red-800 dark:bg-zinc-50/10' : '' }}"
                    responsive />
                <x-button label="Kontak" link="{{ route('contact') }}"
                    class="btn-ghost btn-sm hidden lg:flex text-white {{ Route::current()->uri == 'contact' ? 'bg-red-800 dark:bg-zinc-50/10' : '' }}"
                    responsive />
                <x-button label="Status Order" link="{{ route('status-order') }}"
                    class="btn-ghost btn-sm hidden lg:flex text-white {{ Route::current()->uri == 'status-order' ? 'bg-red-800 dark:bg-zinc-50/10' : '' }}"
                    responsive />
                <x-button label="FAQ" link="{{ route('faq') }}"
                    class="btn-ghost btn-sm hidden lg:flex text-white {{ Route::current()->uri == 'faq' ? 'bg-red-800 dark:bg-zinc-50/10' : '' }}"
                    responsive />
                <x-input wire:model="product" icon-right="phosphor.magnifying-glass" placeholder="Cari Produk"
                    class="text-black input-sm input-error dark:input-primary rounded-full"
                    @click.stop="$dispatch('mary-search-open')" />
                <x-theme-toggle class="hidden md:grid btn btn-sm btn-circle btn-ghost text-white" />
            </x-slot:actions>
        </x-nav>

        {{-- The main content with `full-width` --}}
        <x-main with-nav full-width>

            {{-- This is a sidebar that works also as a drawer on small screens --}}
            {{-- Notice the `main-drawer` reference here --}}
            <x-slot:sidebar drawer="main-drawer" collapsible class="bg-base-200 lg:hidden">

                {{-- User --}}
                @if ($user = auth()->user())
                    <x-list-item :item="$user" value="name" sub-value="email" no-separator no-hover
                        class="pt-2">
                        <x-slot:actions>
                            <x-button icon="o-power" class="btn-circle btn-ghost btn-xs" tooltip-left="logoff"
                                no-wire-navigate link="/logout" />
                        </x-slot:actions>
                    </x-list-item>

                    <x-menu-separator />
                @endif

                {{-- Activates the menu item when a route matches the `link` property --}}
                <x-menu class="w-64" activate-by-route>
                    <x-menu-separator title="PT. ALFAJRI CREATIVE AGENCY" class="text-xs" />
                    <x-menu-separator />
                    <x-menu-sub title="Advertising" icon="cui.cib-google-ads" class="border-r border-white">
                        <x-menu-item title="Print A3+" icon="cui.cil-print"
                            link="/list-product/advertising/print-a3" />
                        <x-menu-item title="Large Format" icon="cui.cib-sprint"
                            link="/list-product/advertising/large-format" />
                        <x-menu-item title="DTF Print" icon="cui.cil-print"
                            link="/list-product/advertising/dtf-print" />
                        <x-menu-item title="Merchandise" icon="cui.cil-casino"
                            link="/list-product/advertising/merchandise" />
                        <x-menu-item title="Katalog & Buku" icon="cui.cil-book"
                            link="/list-product/advertising/katalog-buku" />
                        <x-menu-item title="Flyer & Brochure" icon="cui.cil-browser"
                            link="/list-product/advertising/flyer-brochure" />
                        <x-menu-item title="Stationary" icon="cui.cil-barcode"
                            link="/list-product/advertising/stationary" />
                    </x-menu-sub>
                    <x-menu-sub title="Graphic Design" icon="cui.cil-pen-nib">
                        <x-menu-item title="Digital Design" icon="cui.cil-braille"
                            link="{{ route('digital-design') }}" />
                        <x-menu-item title="Branding" icon="cui.cil-bullhorn" link="{{ route('branding') }}" />
                        <x-menu-item title="Product Packaging" icon="phosphor.package"
                            link="{{ route('product-packaging') }}" />
                        <x-menu-item title="Company Profile" icon="phosphor.buildings"
                            link="{{ route('company-profile') }}" />
                        <x-menu-item title="Katalog Product" icon="phosphor.bag-simple"
                            link="{{ route('katalog-product') }}" />
                        <x-menu-item title="Design Website" icon="phosphor.google-chrome-logo"
                            link="{{ route('design-website') }}" />
                    </x-menu-sub>
                    <x-menu-sub title="Digital Marketing" icon="phosphor.storefront">
                        <x-menu-item title="Sosial Media Management : IG & Tiktok" icon="phosphor.instagram-logo"
                            link="{{ route('sosial-media-management') }}" />
                        <x-menu-item title="Video Production" icon="phosphor.video"
                            link="{{ route('video-production') }}" />
                        <x-menu-item title="Google Ads" icon="phosphor.google-logo"
                            link="{{ route('google-ads') }}" />
                    </x-menu-sub>
                    <x-menu-separator />
                    <x-menu-item title="Tentang Kami" icon="phosphor.users-four" link="{{ route('about-us') }}" />
                    <x-menu-item title="Kontak" icon="phosphor.phone" link="{{ route('contact') }}" />
                    <x-menu-item title="Status Order" icon="phosphor.bag" link="{{ route('status-order') }}" />
                    <x-menu-item title="FAQ" icon="phosphor.question" link="{{ route('faq') }}" />
                    <x-menu-separator />
                    <x-menu-item title="Theme" icon="o-swatch" @click="$dispatch('mary-toggle-theme')" />
                </x-menu>
            </x-slot:sidebar>

            <x-slot:content>
                {{ $slot }}
                <footer
                    class="w-full h-auto bg-red-700 dark:bg-base-100 absolute left-0 flex flex-col md:flex-row justify-center gap-10 p-[2%]">
                    <div>
                        <div class="flex items-center gap-2">
                            <x-icon name="phosphor.paper-plane-tilt" class="text-white w-5 h-5" />
                            <h2 class="text-xs font-bold text-white">ABOUT ALFAJRI</h2>
                        </div>

                        <p class="text-xs mt-4 text-white max-w-72">
                            PT Alfajri Creative Agency adalah perusahaan kreatif yang memberikan layanan
                            Advertising, Graphic Design dan Digital Marketing.
                        </p>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <p class="text-white text-xs font-bold">SERVICES</p>

                        <ul class="mt-4 space-y-1 text-sm text-white">
                            <li>
                                <a wire:navigate href="{{ route('advertising') }}"
                                    class="transition hover:opacity-75 text-xs">
                                    Advertising
                                </a>
                            </li>

                            <li>
                                <a wire:navigate href="{{ route('graphic-design') }}"
                                    class="transition hover:opacity-75 text-xs">
                                    Graphic Design
                                </a>
                            </li>

                            <li>
                                <a wire:navigate href="{{ route('digital-marketing') }}"
                                    class="transition hover:opacity-75 text-xs">
                                    Digital Marketing
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <div>
                            <p class="text-white text-xs font-bold">KANTOR</p>

                            <p class="text-white text-xs mt-3 max-w-56">
                                Jalan Lembang Baru II No. 26, RT 03 / RW 09,
                                Sudirman
                                Barat,
                                Ciledug, Kota
                                Tangerang, 15151.</p>
                        </div>
                        <div class="mt-3 flex items-center gap-2">
                            <x-icon name="phosphor.clock" class="w-5 h-5 text-white" />
                            <div>
                                <p class="text-xs text-white">Senin - Sabtu : 08.00 - 21.00</p>
                                <p class="text-xs text-white">Minggu : 09.00 - 17.00</p>
                            </div>
                        </div>
                        <div class="mt-3 flex items-center gap-2">
                            <x-icon name="phosphor.whatsapp-logo" class="w-5 h-5 text-white" />
                            <div>
                                <p class="text-xs text-white">0821 2313 1995</p>
                            </div>
                        </div>
                        <div class="mt-3 flex items-center gap-2">
                            <x-icon name="phosphor.envelope-simple" class="w-5 h-5 text-white" />
                            <div>
                                <p class="text-xs text-white">alfajriproduction@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-col gap-2">
                            <div class="text-white text-xs font-bold text-center">SUBSCRIBE NEWSLETTER</div>
                            <x-form>
                                <x-input class="rounded-none text-xs input-error dark:input-primary md:!w-60"
                                    placeholder="KETIKAN ALAMAT EMAIL KAMU">
                                    <x-slot:append>
                                        <x-button icon="phosphor.paper-plane-tilt"
                                            class="btn-error dark:btn-primary text-white !bg-red-950 dark:!bg-primary rounded-none" />
                                    </x-slot:append>
                                </x-input>
                            </x-form>
                        </div>
                        <div class="flex flex-col gap-2 items-center">
                            <p class="text-white text-xs font-bold">Connect With Us</p>

                            <div class="flex gap-2">
                                <x-button icon="phosphor.instagram-logo"
                                    class="btn-circle btn-sm text-red-800 dark:text-white dark:shadow-lg dark:shadow-white"
                                    tooltip-bottom="Instagram" />
                                <x-button icon="phosphor.tiktok-logo"
                                    class="btn-circle btn-sm text-red-800 dark:text-white dark:shadow-lg dark:shadow-white"
                                    tooltip-bottom="Tiktok" />
                                <x-button icon="phosphor.shopping-bag"
                                    class="btn-circle btn-sm text-red-800 dark:text-white dark:shadow-lg dark:shadow-white"
                                    tooltip-bottom="Shopee" />
                                <x-button icon="phosphor.tote"
                                    class="btn-circle btn-sm text-red-800 dark:text-white dark:shadow-lg dark:shadow-white"
                                    tooltip-bottom="Tokopedia" />
                                <x-button icon="cui.cil-location-pin"
                                    class="btn-circle btn-sm text-red-800 dark:text-white dark:shadow-lg dark:shadow-white"
                                    tooltip-bottom="Location" />
                            </div>
                        </div>
                    </div>
                </footer>
            </x-slot:content>
        </x-main>
        <x-spotlight />
        {{--  TOAST area --}}
        <x-toast />
    </body>
@else

    <body class="font-sans antialiased">

        {{-- The navbar with `sticky` and `full-width` --}}
        <x-nav sticky full-width>

            <x-slot:brand>
                {{-- Drawer toggle for "main-drawer" --}}
                <label for="main-drawer" class="lg:hidden mr-3">
                    <x-icon name="o-bars-3" class="cursor-pointer" />
                </label>

                {{-- Brand --}}
                <div>Dashboard Management Product</div>
            </x-slot:brand>

            {{-- Right side actions --}}
            <x-slot:actions>
                <x-theme-toggle />
            </x-slot:actions>
        </x-nav>

        {{-- The main content with `full-width` --}}
        <x-main with-nav full-width>

            {{-- This is a sidebar that works also as a drawer on small screens --}}
            {{-- Notice the `main-drawer` reference here --}}
            <x-slot:sidebar drawer="main-drawer" collapsible class="bg-base-200">

                {{-- User --}}
                @if ($user = auth()->user())
                    <x-list-item :item="$user" value="name" sub-value="email" no-separator no-hover
                        class="pt-2">
                        <x-slot:actions>
                            <x-button icon="o-power" class="btn-circle btn-ghost btn-xs" tooltip-left="Logout"
                                no-wire-navigate link="/logout" />
                        </x-slot:actions>
                    </x-list-item>

                    <x-menu-separator />
                @endif

                {{-- Activates the menu item when a route matches the `link` property --}}
                <x-menu activate-by-route>
                    <x-menu-item title="Dashboard" icon="phosphor.gauge" link="{{ route('dashboard') }}" />
                    <x-menu-item title="Order Produk" icon="phosphor.shopping-cart"
                        link="{{ route('order-product') }}" />
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
@endif

</html>
