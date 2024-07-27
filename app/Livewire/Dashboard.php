<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Title;
use Livewire\Component;
use Mary\Traits\Toast;

class Dashboard extends Component
{
    use Toast;

    public function getTotalCategory(): int
    {
        return count(Category::all());
    }

    public function getTotalSubCategory(): int
    {
        return count(SubCategory::all());
    }

    public function getTotalProduct(): int
    {
        return count(Product::all());
    }

    public function getHeaders(): array
    {
        return [
            ['key' => 'id', 'label' => '#'],
            ['key' => 'name', 'label' => 'Nama'],
            ['key' => 'description', 'label' => 'Deskripsi'],
            ['key' => 'img', 'label' => 'Gambar'],
            ['key' => 'category_name', 'label' => 'Category'],
            ['key' => 'subcategory_name', 'label' => 'Sub Category'],
        ];
    }

    public function getProducts(): Collection
    {
        return Product::join('category', 'product.category_slug', '=', 'category.slug')
            ->join('subcategory', 'product.subcategory_slug', '=', 'subcategory.slug')
            ->select('product.id', 'product.name', 'product.description', 'product.img', 'category.name as category_name', 'subcategory.name as subcategory_name')
            ->get();
    }

    public function delete($id)
    {
        $this->info($id);
    }

    #[Title('Dashboard')]
    public function render()
    {
        return view('livewire.dashboard', [
            'headers' => $this->getHeaders(),
            'products' => $this->getProducts(),
            'totalCategory' => $this->getTotalCategory(),
            'totalSubCategory' => $this->getTotalSubCategory(),
            'totalProduct' => $this->getTotalProduct(),
        ]);
    }
}
