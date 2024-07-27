<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class ListProduct extends Component
{
    public string $categorySelected;
    public string $productSelected;

    public function mount($category, $product)
    {
        $this->categorySelected = $category;
        $this->productSelected = $product;
    }

    #[Title('Produk')]
    public function render()
    {
        return view('livewire.list-product');
    }
}
