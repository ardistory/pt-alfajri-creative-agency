<?php

namespace App\Livewire;

use App\Models\OrderProduct as ModelsOrderProduct;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;
use Mary\Traits\Toast;

class OrderProduct extends Component
{
    use Toast;
    use WithPagination;

    public string $search = '';
    #[Validate('required', as: 'Nomor Invoice')]
    public string $noInvoice = '';
    #[Validate('required', as: 'Nama')]
    public string $name = '';
    #[Validate('required', as: 'Nomor Handphone')]
    public string $noHandphone;
    #[Validate('required', as: 'Detail Order')]
    public string $detailOrder = '';
    #[Validate('nullable')]
    public ?string $noResi = '';
    public array $sortBy = ['column' => 'no_invoice', 'direction' => 'asc'];
    public bool $showDrawerEdit = false;
    public bool $showDrawerAdd = false;

    public $orderEdit;
    public int $editTahap;

    public function getHeaders(): array
    {
        return [
            ['key' => 'id', 'label' => '#', 'sortable' => false],
            ['key' => 'no_invoice', 'label' => 'No Invoice'],
            ['key' => 'tgl_order1', 'label' => 'Tanggal Order'],
            ['key' => 'name', 'label' => 'Nama'],
            ['key' => 'no_hp', 'label' => 'Nomor HP'],
            ['key' => 'detail_order', 'label' => 'Detail Order'],
            ['key' => 'no_resi', 'label' => 'Nomor Resi'],
            ['key' => 'tahap', 'label' => 'Tahap'],
        ];
    }

    public function getTotalOrderProduct()
    {
        $totalTahap1 = 0;
        $totalTahap2 = 0;
        $totalTahap3 = 0;

        $orders = ModelsOrderProduct::all(['no_invoice', 'tahap']);

        foreach ($orders as $order) {
            if ($order['tahap'] == 1) {
                $totalTahap1++;
            } elseif ($order['tahap'] == 2) {
                $totalTahap2++;
            } elseif ($order['tahap'] == 3) {
                $totalTahap3++;
            }
        }

        return [
            'totalOrder' => count($orders),
            'totalTahap1' => $totalTahap1,
            'totalTahap2' => $totalTahap2,
            'totalTahap3' => $totalTahap3,
        ];
    }

    public function getOrderProducts(): LengthAwarePaginator
    {
        return ModelsOrderProduct::query()
            ->when($this->search, function (Builder $builder) {
                return $builder->where('order_product.no_invoice', 'like', "%$this->search%");
            })
            ->orderBy(...array_values($this->sortBy))
            ->select('order_product.id', 'order_product.no_invoice', 'order_product.tgl_order1', 'order_product.name', 'order_product.no_hp', 'order_product.detail_order', 'order_product.no_resi', 'order_product.tahap')
            ->paginate(5);
    }

    public function addOrder(): void
    {
        $dataValid = $this->validate();

        $storeDataOrder = ModelsOrderProduct::create([
            'no_invoice' => $dataValid['noInvoice'],
            'tgl_order1' => Carbon::now(),
            'name' => $dataValid['name'],
            'no_hp' => $dataValid['noHandphone'],
            'detail_order' => $dataValid['detailOrder'],
            'no_resi' => $this->noResi
        ]);

        $storeDataOrder ? $this->success('Tambah order berhasil') : $this->error('Tambah order gagal');
        $this->reset(['noInvoice', 'name', 'noHandphone', 'detailOrder', 'noResi']);
    }

    public function getTahap(): array
    {
        return [
            [
                'desc' => '1 - Proses Desain / Setting',
                'value' => 1
            ],
            [
                'desc' => '2 - Sedang Proses Produksi',
                'value' => 2
            ],
            [
                'desc' => '3 - Sudah Bisa Diambil',
                'value' => 3
            ]
        ];
    }

    public function edit($orderId)
    {
        $this->showDrawerEdit = true;

        $orderEdit = ModelsOrderProduct::findOrFail($orderId);

        $this->orderEdit = $orderEdit;
    }

    public function editOrder($orderId)
    {
        if ($this->editTahap == 1) {
            ModelsOrderProduct::query()->where('id', '=', $orderId)->update([
                'tgl_order1' => Carbon::now(),
                'tahap' => $this->editTahap
            ]);
        } elseif ($this->editTahap == 2) {
            ModelsOrderProduct::query()->where('id', '=', $orderId)->update([
                'tgl_order2' => Carbon::now(),
                'tahap' => $this->editTahap
            ]);
        } elseif ($this->editTahap == 3) {
            ModelsOrderProduct::query()->where('id', '=', $orderId)->update([
                'tgl_order3' => Carbon::now(),
                'tahap' => $this->editTahap
            ]);
        }

        $this->success('Edit order berhasil!');
    }

    public function delete($orderId)
    {
        if (ModelsOrderProduct::find($orderId)->deleteOrFail()) {
            $this->error('Hapus order berhasil');
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

    public function render()
    {
        return view('livewire.order-product', [
            'headers' => $this->getHeaders(),
            'orderProducts' => $this->getOrderProducts(),
            'totalOrderProduct' => $this->getTotalOrderProduct(),
            'tahap' => $this->getTahap()
        ]);
    }
}
