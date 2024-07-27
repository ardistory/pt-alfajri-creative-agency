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
    <title>{{ isset($title) ? 'PT. ALFAJRI CREATIVE AGENCY' . ' - ' . $title : 'PT. ALFAJRI CREATIVE AGENCY' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

@if (!in_array(Route::currentRouteName(), ['login', 'dashboard']))

    <body
        class="antialiased font-Inter dark:bg-gradient-to-r {{ Route::current()->uri != '/' ? 'kotak-polos' : 'kotak' }}">
        {{-- The navbar with `sticky` and `full-width` --}}
        <x-nav class="bg-red-700 dark:bg-base-100 shadow-md shadow-black/40 dark:shadow-gray-500/20 border-none z-20"
            sticky full-width>
            <x-slot:brand>
                {{-- Drawer toggle for "main-drawer" --}}
                <label for="main-drawer" class="lg:hidden mr-3 text-white">
                    <x-icon name="o-bars-3" class="cursor-pointer" />
                </label>

                {{-- Brand --}}
                <div class="flex flex-col justify-center items-center">
                    <x-button label="LOGO" icon="phosphor.package" link="{{ route('home-page') }}"
                        class="btn-outline btn-sm text-white" />
                    <span class="font-semibold text-[9px] drop-shadow-md text-white">PT. ALFAJRI CREATIVE AGENCY</span>
                </div>
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
                                link="/list-product/graphic-design/digital-design" />
                            <x-menu-item title="Branding" icon="cui.cil-bullhorn"
                                link="/list-product/graphic-design/branding" />
                            <x-menu-item title="Product Packaging" icon="phosphor.package"
                                link="/list-product/graphic-design/product-packaging" />
                            <x-menu-item title="Company Profile" icon="phosphor.buildings"
                                link="/list-product/graphic-design/company-profile" />
                            <x-menu-item title="Katalog Product" icon="phosphor.bag-simple"
                                link="/list-product/graphic-design/katalog-product" />
                            <x-menu-item title="Design Website" icon="phosphor.google-chrome-logo"
                                link="/list-product/graphic-design/design-website" />
                        </div>
                        <div>
                            <x-menu-item title="Digital Marketing" icon="phosphor.storefront"
                                link="{{ route('digital-marketing') }}" />
                            <x-menu-separator />
                            <x-menu-item title="Sosial Media Management : IG & Tiktok" icon="phosphor.instagram-logo"
                                link="/list-product/digital-marketing/sosial-media-management" />
                            <x-menu-item title="Video Production" icon="phosphor.video"
                                link="/list-product/digital-marketing/video-production" />
                            <x-menu-item title="Google Ads" icon="phosphor.google-logo"
                                link="/list-product/digital-marketing/google-ads" />
                        </div>
                    </div>
                </x-dropdown>
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
                    class="text-black input-sm input-error dark:input-primary rounded-full" />
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
                            link="/list-product/graphic-design/digital-design" />
                        <x-menu-item title="Branding" icon="cui.cil-bullhorn"
                            link="/list-product/graphic-design/branding" />
                        <x-menu-item title="Product Packaging" icon="phosphor.package"
                            link="/list-product/graphic-design/product-packaging" />
                        <x-menu-item title="Company Profile" icon="phosphor.buildings"
                            link="/list-product/graphic-design/company-profile" />
                        <x-menu-item title="Katalog Product" icon="phosphor.bag-simple"
                            link="/list-product/graphic-design/katalog-product" />
                        <x-menu-item title="Design Website" icon="phosphor.google-chrome-logo"
                            link="/list-product/graphic-design/design-website" />
                    </x-menu-sub>
                    <x-menu-sub title="Digital Marketing" icon="phosphor.storefront">
                        <x-menu-item title="Sosial Media Management : IG & Tiktok" icon="phosphor.instagram-logo"
                            link="/list-product/digital-marketing/sosial-media-management" />
                        <x-menu-item title="Video Production" icon="phosphor.video"
                            link="/list-product/digital-marketing/video-production" />
                        <x-menu-item title="Google Ads" icon="phosphor.google-logo"
                            link="/list-product/digital-marketing/google-ads" />
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
                <footer class="bg-red-700 dark:bg-base-100 text-white absolute left-0 right-0">
                    <div class="max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
                        <div class="lg:flex lg:items-start lg:gap-8">

                            <div class="mt-8 grid grid-cols-2 gap-8 lg:mt-0 lg:grid-cols-5 lg:gap-y-16">
                                <div class="col-span-2">
                                    <div>
                                        <div class="flex items-center gap-2">
                                            <x-icon name="phosphor.paper-plane-tilt" class="w-10 h-10" />
                                            <h2 class="text-2xl font-bold text-white">ABOUT ALFAJRI</h2>
                                        </div>

                                        <p class="mt-4 text-white">
                                            PT Alfajri Creative Agency adalah perusahaan kreatif yang memberikan layanan
                                            Advertising, Graphic Design dan Digital Marketing.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-span-2 lg:col-span-3 lg:flex lg:items-end">
                                    <form class="w-full">
                                        <label for="UserEmail" class="sr-only"> Email </label>

                                        <x-input class="input-error dark:input-primary rounded-none"
                                            placeholder="KETIKAN ALAMAT EMAIL KAMU">
                                            <x-slot:label>
                                                <span class="text-white">SUBSCRIBE NEWSLETTER</span>
                                            </x-slot:label>
                                            <x-slot:append>
                                                <x-button icon="phosphor.paper-plane-right"
                                                    class="btn-error dark:btn-primary rounded-none text-white" />
                                            </x-slot:append>
                                        </x-input>
                                    </form>
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <p class="font-medium text-white text-lg">Services</p>

                                    <ul class="mt-3 space-y-4 text-sm text-white">
                                        <li>
                                            <a href="#" class="transition hover:opacity-75">
                                                Advertising
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="transition hover:opacity-75"> Company
                                                Graphic Design
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="transition hover:opacity-75"> Accounts
                                                Digital Marketing
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <div>
                                        <p class="font-medium text-white text-lg">Kantor</p>

                                        <p class="text-white text-sm mt-3">
                                            Jalan Lembang Baru II No. 26, RT 03 / RW 09,
                                            Sudirman
                                            Barat,
                                            Ciledug, Kota
                                            Tangerang, 15151.</p>
                                    </div>
                                    <div class="mt-3 flex items-center gap-2">
                                        <x-icon name="phosphor.clock" class="w-5 h-5" />
                                        <div>
                                            <p class="text-xs">Senin - Sabtu : 08.00 - 21.00</p>
                                            <p class="text-xs">Minggu : 09.00 - 17.00</p>
                                        </div>
                                    </div>
                                    <div class="mt-3 flex items-center gap-2">
                                        <x-icon name="phosphor.whatsapp-logo" class="w-5 h-5" />
                                        <div>
                                            <p class="text-xs">0821 2313 1995</p>
                                        </div>
                                    </div>
                                    <div class="mt-3 flex items-center gap-2">
                                        <x-icon name="phosphor.envelope-simple" class="w-5 h-5" />
                                        <div>
                                            <p class="text-xs">alfajriproduction@gmail.com</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <div>
                                        <p class="font-medium text-white text-lg">Connect With Us</p>

                                        <div class="flex gap-2">
                                            <x-button icon="phosphor.instagram-logo"
                                                class="btn-circle text-red-800 dark:text-white dark:shadow-lg dark:shadow-white"
                                                tooltip-bottom="Instagram" />
                                            <x-button icon="phosphor.tiktok-logo"
                                                class="btn-circle text-red-800 dark:text-white dark:shadow-lg dark:shadow-white"
                                                tooltip-bottom="Tiktok" />
                                            <x-button icon="phosphor.shopping-bag"
                                                class="btn-circle text-red-800 dark:text-white dark:shadow-lg dark:shadow-white"
                                                tooltip-bottom="Shopee" />
                                            <x-button icon="phosphor.tote"
                                                class="btn-circle text-red-800 dark:text-white dark:shadow-lg dark:shadow-white"
                                                tooltip-bottom="Tokopedia" />
                                            <x-button icon="cui.cil-location-pin"
                                                class="btn-circle text-red-800 dark:text-white dark:shadow-lg dark:shadow-white"
                                                tooltip-bottom="Location" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </x-slot:content>
        </x-main>

        {{--  TOAST area --}}
        <x-toast />
    </body>
@else

    <body class="bg-gray-950">
        {{ $slot }}
        <x-toast />
    </body>
@endif

</html>
