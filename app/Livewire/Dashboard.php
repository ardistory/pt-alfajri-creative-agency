<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Mary\Traits\Toast;

#[Lazy()]
class Dashboard extends Component
{
    use Toast;
    use WithPagination;
    use WithFileUploads;

    public string $search = '';
    public array $sortBy = ['column' => 'id', 'direction' => 'desc'];
    public bool $showDrawerAdd = false;
    #[Validate('required|min:3')]
    public string $name = '';
    #[Validate('required|min:3')]
    public string $description = '';
    #[Validate('image|max:2048')]
    public $img;
    #[Validate('required|min:3')]
    public string $category = '';
    #[Validate('required|min:3')]
    public string $subCategory = '';

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
            ['key' => 'id', 'label' => '#', 'sortable' => false],
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
            ->where('category.slug', 'like', '%' . $this->category . '%')
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

    public function addProduct()
    {
        $data = $this->validate();
        $fileName = $data['img']->getClientOriginalName();

        $product = Product::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'img' => $fileName,
            'category_slug' => $data['category'],
            'subcategory_slug' => $data['subCategory']
        ]);

        $this->img->storePubliclyAs('img-product', $fileName, 'public');
        $product ? $this->success('Tambah produk berhasil') : $this->error('Tambah produk gagal');
        $this->reset(['name', 'description', 'img', 'category', 'subCategory']);
    }

    public function delete($productId)
    {
        $namaFile = Product::find($productId)->img;

        if (Product::find($productId)->deleteOrFail()) {
            Storage::disk('local')->delete('public/img-product/' . $namaFile);

            $this->error('Hapus produk berhasil');
        }
    }

    public function clear()
    {
        $this->reset('search');
    }

    public function updatedSearch()
    {
        $this->resetPage();
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
