<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\SubCategory;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Lazy()]
class ListProduct extends Component
{
    public string $category;
    public string $subcategory;

    public function mount($category, $subcategory)
    {
        $this->category = $category;
        $this->subcategory = $subcategory;
    }

    public function getTitle()
    {
        return SubCategory::query()->where('subcategory.slug', '=', $this->subcategory)->get();
    }

    public function getProductFromUrl()
    {
        return Product::query()->where('category_slug', '=', $this->category)
            ->where('subcategory_slug', '=', $this->subcategory)
            ->get();
    }

    #[Title('Produk')]
    public function render()
    {
        return view('livewire.list-product', [
            'products' => $this->getProductFromUrl(),
            'title' => $this->getTitle()
        ]);
    }
}
