<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class KatalogProduct extends Component
{
    #[Title('Katalog Produk')]
    public function render()
    {
        return view('livewire.katalog-product');
    }
}
