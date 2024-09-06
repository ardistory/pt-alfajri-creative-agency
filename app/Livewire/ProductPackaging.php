<?php

namespace App\Livewire;

use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Component;

// #[Lazy()]
class ProductPackaging extends Component
{
    #[Title('Product Packaging')]
    public function render()
    {
        return view('livewire.product-packaging');
    }
}
