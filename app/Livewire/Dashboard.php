<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use Mary\Traits\Toast;

class Dashboard extends Component
{
    use Toast;
    use WithPagination;

    public string $search = '';
    public array $sortBy = ['column' => 'name', 'direction' => 'asc'];
    public bool $showDrawerAdd = false;
    public string $nameProduct = '';
    public string $descriptionProduct = '';
    public string $categoryProduct = '';
    public string $subCategoryProduct = '';

    public function getTotalCategory(): int
    {
        return count(Category::all());
    }

    public function getCategory(): Collection
    {
        return Category::all();
    }

    public function getTotalSubCategory(): int
    {
        return count(SubCategory::all());
    }

    public function getSubCategory(): Collection
    {
        return SubCategory::all();
    }

    public function getTotalProduct(): int
    {
        return count(Product::all());
    }

    public function getProducts(): LengthAwarePaginator
    {
        return Product::query()
            ->when($this->search, function (Builder $builder) {
                return $builder->where('product.name', 'like', "%$this->search%");
            })
            ->orderBy(...array_values($this->sortBy))
            ->join('category', 'product.category_slug', '=', 'category.slug')
            ->join('subcategory', 'product.subcategory_slug', '=', 'subcategory.slug')
            ->select('product.id', 'product.name', 'product.description', 'product.img', 'category.name as category_name', 'subcategory.name as subcategory_name')
            ->paginate(5);
    }

    public function getHeadersProduct(): array
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

    public function getListCategory()
    {
        return [
            [
                'name' => 'Advertising',
                'slug' => 'advertising'
            ],
            [
                'name' => 'Graphic Design',
                'slug' => 'graphic-design'
            ],
            [
                'name' => 'Digital Marketing',
                'slug' => 'digital-marketing'
            ]
        ];
    }

    public function getListSubCategory()
    {
        $listSubCategory = [];
        $temp = SubCategory::join('category', 'category.slug', '=', 'subcategory.category_slug')
            ->where('category.slug', 'like', '%' . $this->categoryProduct . '%')
            ->select('subcategory.name', 'subcategory.slug')
            ->get();

        foreach ($temp as $value) {
            $listSubCategory[] = [
                'slug' => $value['slug'],
                'name' => $value['name']
            ];
        }

        return $listSubCategory;
    }

    public function delete($id)
    {
        $this->info($id);
    }

    #[Title('Dashboard')]
    public function render()
    {
        return view('livewire.dashboard', [
            'headersProduct' => $this->getHeadersProduct(),
            'products' => $this->getProducts(),
            'totalCategory' => $this->getTotalCategory(),
            'totalSubCategory' => $this->getTotalSubCategory(),
            'totalProduct' => $this->getTotalProduct(),
            'listCategory' => $this->getListCategory(),
            'listSubCategory' => $this->getListSubCategory()
        ]);
    }
}
