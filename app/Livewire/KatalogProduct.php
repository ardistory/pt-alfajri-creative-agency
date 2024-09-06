<?php

namespace App\Livewire;

use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Component;

// #[Lazy()]
class KatalogProduct extends Component
{
    #[Title('Katalog Produk')]
    public function render()
    {
        return view('livewire.katalog-product');
    }
}
