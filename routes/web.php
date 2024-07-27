<?php

use App\Livewire\AboutUs;
use App\Livewire\Advertising;
use App\Livewire\Contact;
use App\Livewire\DigitalMarketing;
use App\Livewire\Fallback;
use App\Livewire\Faq;
use App\Livewire\GraphicDesign;
use App\Livewire\HomePage;
use App\Livewire\ListProduct;
use App\Livewire\StatusOrder;
use Illuminate\Support\Facades\Route;

Route::get('/list-product/{category}/{product}', ListProduct::class);

Route::get('/advertising', Advertising::class)->name('advertising');
Route::get('/graphic-design', GraphicDesign::class)->name('graphic-design');
Route::get('/digital-marketing', DigitalMarketing::class)->name('digital-marketing');

Route::get('/', HomePage::class)->name('home-page');
Route::get('/about-us', AboutUs::class)->name('about-us');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/status-order', StatusOrder::class)->name('status-order');
Route::get('/faq', Faq::class)->name('faq');

Route::fallback(Fallback::class);