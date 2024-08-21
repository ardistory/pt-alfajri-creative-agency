<?php

use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Livewire\AboutUs;
use App\Livewire\Advertising;
use App\Livewire\Branding;
use App\Livewire\CompanyProfile;
use App\Livewire\Contact;
use App\Livewire\Dashboard;
use App\Livewire\DigitalDesign;
use App\Livewire\DigitalMarketing;
use App\Livewire\Fallback;
use App\Livewire\Faq;
use App\Livewire\GraphicDesign;
use App\Livewire\HomePage;
use App\Livewire\KatalogProduct;
use App\Livewire\ListProduct;
use App\Livewire\Login;
use App\Livewire\OrderProduct;
use App\Livewire\ProductPackaging;
use App\Livewire\StatusOrder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::middleware([Authenticate::class])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/order-product', OrderProduct::class)->name('order-product');
    Route::get('/logout', function () {
        Auth::logout();

        return redirect()->route('login');
    });
});

Route::middleware([RedirectIfAuthenticated::class])->group(function () {
    Route::get('/login', Login::class)->name('login');
});

Route::get('/advertising', Advertising::class)->name('advertising');
Route::get('/graphic-design', GraphicDesign::class)->name('graphic-design');
Route::get('/digital-marketing', DigitalMarketing::class)->name('digital-marketing');

Route::get('/list-product/{category}/{subcategory}', ListProduct::class);
Route::get('/digital-design', DigitalDesign::class)->name('digital-design');
Route::get('/branding', Branding::class)->name('branding');
Route::get('/product-packaging', ProductPackaging::class)->name('product-packaging');
Route::get('/company-profile', CompanyProfile::class)->name('company-profile');
Route::get('/katalog-product', KatalogProduct::class)->name('katalog-product');

Route::get('/', HomePage::class)->name('home-page');
Route::get('/about-us', AboutUs::class)->name('about-us');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/status-order', StatusOrder::class)->name('status-order');
Route::get('/faq', Faq::class)->name('faq');

Route::fallback(Fallback::class);