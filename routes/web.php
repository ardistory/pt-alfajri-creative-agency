<?php

use App\Livewire\AboutUs;
use App\Livewire\Contact;
use App\Livewire\Faq;
use App\Livewire\HomePage;
use App\Livewire\StatusOrder;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home-page');
Route::get('/about-us', AboutUs::class)->name('about-us');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/status-order', StatusOrder::class)->name('status-order');
Route::get('/faq', Faq::class)->name('faq');
