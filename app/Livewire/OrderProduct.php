<?php

namespace App\Livewire;

use App\Models\OrderProduct as ModelsOrderProduct;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;
use Mary\Traits\Toast;

#[Lazy()]
class OrderProduct extends Component
{
    use Toast;
    use WithPagination;

    public $searchNoInvoice = '';
    public $searchTglOrder = '';
    public $searchName = '';
    public $searchNoHp = '';
    public $searchNoResi = '';


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
    public bool $showDrawerFilter = false;

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
        $totalTahap4 = 0;
        $totalTahap5 = 0;

        $orders = ModelsOrderProduct::all(['no_invoice', 'tahap']);

        foreach ($orders as $order) {
            if ($order['tahap'] == 1) {
                $totalTahap1++;
            } elseif ($order['tahap'] == 2) {
                $totalTahap2++;
            } elseif ($order['tahap'] == 3) {
                $totalTahap3++;
            } elseif ($order['tahap'] == 4) {
                $totalTahap4++;
            } elseif ($order['tahap'] == 5) {
                $totalTahap5++;
            }
        }

        return [
            'totalOrder' => count($orders),
            'totalTahap1' => $totalTahap1,
            'totalTahap2' => $totalTahap2,
            'totalTahap3' => $totalTahap3,
            'totalTahap4' => $totalTahap4,
            'totalTahap5' => $totalTahap5,
        ];
    }

    public function getOrderProducts(): LengthAwarePaginator
    {
        return ModelsOrderProduct::query()
            ->when($this->searchNoInvoice, function (Builder $builder) {
                return $builder->where('order_product.no_invoice', 'like', "%$this->searchNoInvoice%");
            })
            ->when($this->searchTglOrder, function (Builder $builder) {
                return $builder->whereDate('order_product.tgl_order1', $this->searchTglOrder);
            })
            ->when($this->searchName, function (Builder $builder) {
                return $builder->where('order_product.name', 'like', "%$this->searchName%");
            })
            ->when($this->searchNoHp, function (Builder $builder) {
                return $builder->where('order_product.no_hp', 'like', "%$this->searchNoHp%");
            })
            ->when($this->searchNoResi, function (Builder $builder) {
                return $builder->where('order_product.no_resi', 'like', "%$this->searchNoResi%");
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
            ],
            [
                'desc' => '4 - Pesanan Sudah Di Ambil',
                'value' => 4
            ],
            [
                'desc' => 'Batalkan Pesanan',
                'value' => 5
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
        } elseif ($this->editTahap == 4) {
            ModelsOrderProduct::query()->where('id', '=', $orderId)->update([
                'tgl_order4' => Carbon::now(),
                'tahap' => $this->editTahap
            ]);
        } elseif ($this->editTahap == 5) {
            ModelsOrderProduct::query()->where('id', '=', $orderId)->update([
                'tgl_order5' => Carbon::now(),
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
        $this->reset(['searchNoInvoice', 'searchTglOrder', 'searchName', 'searchNoHp', 'searchNoResi']);
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
