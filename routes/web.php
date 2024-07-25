<?php

use App\Livewire\AboutUs;
use App\Livewire\HomePage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home-page');
Route::get('/about-us', AboutUs::class)->name('about-us');
